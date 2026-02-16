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

		var intro = document.getElementById('plc-intro');
		if (intro) {
			body.classList.add('plc-intro-lock');
		}

		if (prefersReducedMotion() || typeof window.gsap === 'undefined') {
			// No animation mode.
			if (intro) {
				intro.style.display = 'none';
				body.classList.remove('plc-intro-lock');
			}
			return;
		}

		var gsap = window.gsap;
		var ScrollTrigger = window.ScrollTrigger;
		if (ScrollTrigger) {
			gsap.registerPlugin(ScrollTrigger);
		}

		// Loading intro (plays every visit)
		if (intro) {
			var dots = intro.querySelectorAll('.plc-intro__dot');
			var tlIntro = gsap.timeline({
				defaults: { ease: 'power3.out' },
				onComplete: function () {
					intro.style.pointerEvents = 'none';
					gsap.to(intro, {
						opacity: 0,
						duration: 0.45,
						onComplete: function () {
							intro.style.display = 'none';
							body.classList.remove('plc-intro-lock');
						},
					});
				},
			});

			tlIntro
				.fromTo(intro.querySelector('.plc-intro__content'), { y: 14, opacity: 0 }, { y: 0, opacity: 1, duration: 0.7 })
				.fromTo(
					dots,
					{ scale: 0.6, opacity: 0.35 },
					{ scale: 1, opacity: 0.9, duration: 0.6, stagger: 0.08 },
					'-=0.35'
				)
				.to(dots, { y: -6, duration: 0.35, yoyo: true, repeat: 3, stagger: 0.08, ease: 'sine.inOut' })
				.to(intro.querySelector('.plc-intro__bg'), { opacity: 0.65, duration: 0.4 }, '-=0.6')
				.to(intro.querySelector('.plc-intro__content'), { y: -10, opacity: 0, duration: 0.55 }, '+=0.1');
		}

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
				{ y: 0, opacity: 1, duration: 0.9, ease: 'power3.out', stagger: 0.03, delay: intro ? 1.4 : 0 }
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

		// Cards
		qsAll('[data-anim="card"]').forEach(function (card, i) {
			gsap.fromTo(
				card,
				{ y: 22, opacity: 0 },
				{
					y: 0,
					opacity: 1,
					duration: 0.8,
					ease: 'power3.out',
					stagger: 0.02,
					scrollTrigger: ScrollTrigger
						? { trigger: card, start: 'top 92%', once: true }
						: undefined,
				}
			);

			// Magnetic-ish hover
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

		// Ambient hero visual
		var orb = document.querySelector('.plc-orb');
		if (orb) {
			gsap.to(orb, { rotate: 360, duration: 18, ease: 'none', repeat: -1 });
			gsap.to(orb, { y: -14, duration: 3.6, ease: 'sine.inOut', yoyo: true, repeat: -1 });
		}
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', boot);
	} else {
		boot();
	}
})();
