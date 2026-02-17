(function () {
	'use strict';

	function prefersReducedMotion() {
		return window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
	}

	function qsAll(sel, root) {
		return Array.prototype.slice.call((root || document).querySelectorAll(sel));
	}

	function boot() {
		var body = document.body;
		body.classList.add('plc-ready');

		// Smooth anchor scrolling (native + reduced motion safe)
		qsAll('a[href^="#"]').forEach(function (a) {
			a.addEventListener('click', function (e) {
				var href = a.getAttribute('href');
				if (!href || href === '#') return;
				var target = document.querySelector(href);
				if (!target) return;
				e.preventDefault();
				target.scrollIntoView({
					behavior: prefersReducedMotion() ? 'auto' : 'smooth',
					block: 'start',
				});
			});
		});

		// Deck jumps (for CTA buttons)
		qsAll('[data-deck-jump]').forEach(function (btn) {
			btn.addEventListener('click', function (e) {
				e.preventDefault();
				var idx = parseInt(btn.getAttribute('data-deck-jump') || '0', 10);
				if (!idx || !window.__plcDeck) return;
				window.__plcDeck.toSlide(idx);
			});
		});

		if (prefersReducedMotion() || typeof window.gsap === 'undefined') {
			// No animation mode.
			return;
		}

		var gsap = window.gsap;
		var ScrollTrigger = window.ScrollTrigger;
		if (ScrollTrigger) {
			gsap.registerPlugin(ScrollTrigger);
		}

		// Intro loader removed.

		// Hero title split-ish (simple: animate words)
		var title = document.querySelector('[data-anim="title"]');
		if (title) {
			var words = title.textContent.trim().split(/\s+/);
			title.innerHTML = words.map(function (w) {
				return '<span class="plc-word"><span>' + w + '</span></span>';
			}).join(' ');
			gsap.fromTo(
				title.querySelectorAll('.plc-word > span'),
				{ y: 18, opacity: 0 },
				{ y: 0, opacity: 1, duration: 0.9, ease: 'power3.out', stagger: 0.03, delay: 0 }
			);
		}

		// Generic fades
		qsAll('[data-anim="fade"]').forEach(function (el) {
			var delay = parseFloat(el.getAttribute('data-anim-delay') || '0') || 0;
			gsap.fromTo(
				el,
				{ y: 14, opacity: 0 },
				{
					y: 0,
					opacity: 1,
					duration: 0.75,
					ease: 'power3.out',
					delay: delay,
					scrollTrigger: ScrollTrigger
						? { trigger: el, start: 'top 88%', once: true }
						: undefined,
				}
			);
		});

		// 3D Deck (scroll-driven)
		var deck = document.querySelector('[data-deck]');
		var slides = deck ? qsAll('[data-slide]', deck) : [];
		var bar = document.querySelector('[data-deck-bar]');

		if (deck && slides.length) {
			// Make sure slides start stacked in 3D space
			gsap.set(slides, { opacity: 0, rotateX: 10, rotateY: -6, z: -220, y: 34, transformOrigin: '50% 50%', force3D: true });
			gsap.set(slides[0], { opacity: 1, rotateX: 0, rotateY: 0, z: 0, y: 0 });

			var tl = gsap.timeline({ defaults: { ease: 'power3.inOut' } });
			var step = 1 / Math.max(1, slides.length - 1);

			function animateProof(slide, at) {
				if (!slide) return;
				var title = slide.querySelector('[data-proof="title"]');
				var sub = slide.querySelector('[data-proof="sub"]');
				var metrics = slide.querySelectorAll('.plc-metric');
				var chips = slide.querySelectorAll('.plc-proof2 .plc-chip');
				if (title) tl.fromTo(title, { y: 14, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power3.out' }, at);
				if (sub) tl.fromTo(sub, { y: 10, opacity: 0 }, { y: 0, opacity: 1, duration: 0.5, ease: 'power3.out' }, at + 0.06);
				if (metrics && metrics.length)
					tl.fromTo(metrics, { y: 20, opacity: 0, rotateX: 10 }, { y: 0, opacity: 1, rotateX: 0, duration: 0.6, stagger: 0.08, ease: 'power3.out' }, at + 0.12);
				if (chips && chips.length)
					tl.fromTo(chips, { y: 10, opacity: 0 }, { y: 0, opacity: 1, duration: 0.45, stagger: 0.04, ease: 'power3.out' }, at + 0.18);
			}

			for (var i = 0; i < slides.length - 1; i++) {
				var a = slides[i];
				var b = slides[i + 1];

				// Bring next slide in while pushing current away (more editorial, less aggressive)
				tl.to(a, { opacity: 0, z: -380, rotateX: -12, rotateY: 6, y: -56, duration: 0.60 }, i)
					.to(b, { opacity: 1, z: 0, rotateX: 0, rotateY: 0, y: 0, duration: 0.70 }, i + 0.12)
					.fromTo(
						b.querySelectorAll('.plc-card'),
						{ y: 18, opacity: 0 },
						{ y: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: 'power3.out' },
						i + 0.22
					);

				// Slide-specific: proof slide is index 1
				if (i + 1 === 1) {
					animateProof(b, i + 0.18);
				}
			}

			// Background parallax for any layers tagged with data-parallax
			slides.forEach(function (s) {
				var layers = s.querySelectorAll('[data-parallax]');
				if (!layers || !layers.length) return;
				layers.forEach(function (layer) {
					var depth = parseFloat(layer.getAttribute('data-depth') || '0.12') || 0.12;
					gsap.fromTo(
						layer,
						{ yPercent: -8 * depth, opacity: 0.9 },
						{
							yPercent: 10 * depth,
							opacity: 1,
							ease: 'none',
							scrollTrigger: {
								trigger: deck,
								start: 'top top',
								end: '+=' + (slides.length * 1000),
								scrub: true,
							},
						}
					);
				});
			});

			var st = ScrollTrigger.create({
				animation: tl,
				trigger: deck,
				start: 'top top',
				end: '+=' + (slides.length * 1000),
				scrub: 1,
				pin: true,
				onUpdate: function (self) {
					if (bar) bar.style.width = Math.round(self.progress * 100) + '%';
				},
			});

			window.__plcDeck = {
				toSlide: function (idx) {
					idx = Math.max(0, Math.min(slides.length - 1, idx));
					var p = idx * step;
					var y = st.start + (st.end - st.start) * p;
					window.scrollTo({ top: y, behavior: prefersReducedMotion() ? 'auto' : 'smooth' });
				},
			};
		}

		// Magnetic-ish hover for cards (works both in deck and normal mode)
		qsAll('.plc-card').forEach(function (card) {
			card.addEventListener('mousemove', function (e) {
				var r = card.getBoundingClientRect();
				var dx = (e.clientX - (r.left + r.width / 2)) / r.width;
				var dy = (e.clientY - (r.top + r.height / 2)) / r.height;
				gsap.to(card, { x: dx * 10, y: dy * 10, duration: 0.3, ease: 'power2.out' });
			});
			card.addEventListener('mouseleave', function () {
				gsap.to(card, { x: 0, y: 0, duration: 0.5, ease: 'power3.out' });
			});
		});
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', boot);
	} else {
		boot();
	}
})();
