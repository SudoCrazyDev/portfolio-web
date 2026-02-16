<?php
/**
 * Front Page template
 *
 * 3D slide-deck one-page portfolio (scroll-driven).
 *
 * @package plcalub-theme
 */

get_header();
?>

<main id="primary" class="site-main plc-deck">
	<div class="plc-deck__stage" id="plc-deck" data-deck>
		<div class="plc-deck__hud" aria-hidden="true">
			<div class="plc-deck__hint">Scroll</div>
			<div class="plc-deck__progress"><span class="plc-deck__bar" data-deck-bar></span></div>
		</div>

		<section class="plc-slide plc-slide--hero" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--bg" aria-hidden="true" data-parallax data-depth="0.18"></div>
				<div class="plc-slide__content">
					<p class="plc-eyebrow">Fullstack Web Developer</p>
					<h1 class="plc-hero__title" data-anim="title">I build high-performance web products—from UI to infrastructure.</h1>
					<p class="plc-hero__sub">Frontend • Backend • DevOps. Clean UX, reliable systems, measurable results.</p>
					<div class="plc-hero__cta">
						<a class="plc-btn plc-btn--primary" href="#" data-deck-jump="2">View Work</a>
						<a class="plc-btn plc-btn--ghost" href="#" data-deck-jump="7">Contact</a>
					</div>
				</div>
			</div>
		</section>

		<section class="plc-slide" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--grid" aria-hidden="true" data-parallax data-depth="0.10"></div>
				<div class="plc-slide__content">
					<h2 class="plc-h2 plc-proofTitle" data-proof="title">Proof, not fluff.</h2>
					<p class="plc-muted plc-proofSub" data-proof="sub">Placeholder highlights (we’ll swap to real numbers once you give them to me).</p>

					<div class="plc-metrics" data-proof="metrics">
						<div class="plc-metric">
							<div class="plc-metric__n"><span data-count="98">98</span><span class="plc-metric__s">/100</span></div>
							<div class="plc-metric__k">Lighthouse Performance</div>
							<div class="plc-metric__d">Budgeted CSS/JS + optimized images.</div>
						</div>
						<div class="plc-metric">
							<div class="plc-metric__n"><span data-count="0.9">0.9</span><span class="plc-metric__s">s</span></div>
							<div class="plc-metric__k">First usable interaction</div>
							<div class="plc-metric__d">Snappy UX with motion that guides.</div>
						</div>
						<div class="plc-metric">
							<div class="plc-metric__n"><span data-count="24">24</span><span class="plc-metric__s">/7</span></div>
							<div class="plc-metric__k">Deploy hygiene</div>
							<div class="plc-metric__d">CI/CD, rollback plan, monitoring mindset.</div>
						</div>
					</div>

					<div class="plc-proof2" data-proof="chips">
						<span class="plc-chip">ScrollTrigger</span>
						<span class="plc-chip">3D transforms</span>
						<span class="plc-chip">Glass UI</span>
						<span class="plc-chip">Progress HUD</span>
						<span class="plc-chip">Magnetic hover</span>
						<span class="plc-chip">Intro loader</span>
					</div>
				</div>
			</div>
		</section>

		<section class="plc-slide" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--glow" aria-hidden="true" data-parallax data-depth="0.16"></div>
				<div class="plc-slide__content">
					<h2 class="plc-h2">Selected Work</h2>
					<p class="plc-muted">Placeholders for now. We’ll replace with real case studies.</p>
					<div class="plc-cards">
						<a class="plc-card" href="#"><div class="plc-card__top"><span class="plc-tag">UI + Backend</span><span class="plc-card__year">2026</span></div><h3 class="plc-card__title">Nebula CRM</h3><p class="plc-card__desc">Role-based workflows + automation.</p></a>
						<a class="plc-card" href="#"><div class="plc-card__top"><span class="plc-tag">Data</span><span class="plc-card__year">2026</span></div><h3 class="plc-card__title">Pulse Analytics</h3><p class="plc-card__desc">Metrics hub + alerts + reporting.</p></a>
						<a class="plc-card" href="#"><div class="plc-card__top"><span class="plc-tag">DevOps</span><span class="plc-card__year">2026</span></div><h3 class="plc-card__title">Atlas Deploy</h3><p class="plc-card__desc">CI/CD blueprint + safe releases.</p></a>
					</div>
				</div>
			</div>
		</section>

		<section class="plc-slide" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--grid" aria-hidden="true" data-parallax data-depth="0.12"></div>
				<div class="plc-slide__content">
					<h2 class="plc-h2">More Projects</h2>
					<div class="plc-cards">
						<a class="plc-card" href="#"><div class="plc-card__top"><span class="plc-tag">Ecommerce</span><span class="plc-card__year">2025</span></div><h3 class="plc-card__title">Aether Commerce</h3><p class="plc-card__desc">Conversion-focused storefront.</p></a>
						<a class="plc-card" href="#"><div class="plc-card__top"><span class="plc-tag">Systems</span><span class="plc-card__year">2025</span></div><h3 class="plc-card__title">Kairo Scheduler</h3><p class="plc-card__desc">Queues, retries, timezones.</p></a>
						<a class="plc-card" href="#"><div class="plc-card__top"><span class="plc-tag">CMS</span><span class="plc-card__year">2025</span></div><h3 class="plc-card__title">Nimbus Portfolio CMS</h3><p class="plc-card__desc">Typed content + components.</p></a>
					</div>
				</div>
			</div>
		</section>

		<section class="plc-slide" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--glow" aria-hidden="true" data-parallax data-depth="0.14"></div>
				<div class="plc-slide__content">
					<h2 class="plc-h2">Capabilities</h2>
					<div class="plc-cols">
						<div class="plc-col"><h3 class="plc-h3">Frontend</h3><ul class="plc-list"><li>Design systems + motion</li><li>Performance-first UI</li><li>Accessibility</li></ul></div>
						<div class="plc-col"><h3 class="plc-h3">Backend</h3><ul class="plc-list"><li>APIs, auth, data</li><li>Integrations + automation</li><li>Observability</li></ul></div>
						<div class="plc-col"><h3 class="plc-h3">DevOps</h3><ul class="plc-list"><li>CI/CD + safe deploys</li><li>Linux + hosting</li><li>Monitoring</li></ul></div>
					</div>
				</div>
			</div>
		</section>

		<section class="plc-slide" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--grid" aria-hidden="true" data-parallax data-depth="0.12"></div>
				<div class="plc-slide__content">
					<h2 class="plc-h2">How I Work</h2>
					<ol class="plc-steps">
						<li class="plc-step"><span class="plc-step__n">01</span><div class="plc-step__b"><h3 class="plc-h3">Clarify</h3><p class="plc-muted">Goal, constraints, success metrics.</p></div></li>
						<li class="plc-step"><span class="plc-step__n">02</span><div class="plc-step__b"><h3 class="plc-h3">Design</h3><p class="plc-muted">UX, components, motion decisions.</p></div></li>
						<li class="plc-step"><span class="plc-step__n">03</span><div class="plc-step__b"><h3 class="plc-h3">Build</h3><p class="plc-muted">Ship clean code under a performance budget.</p></div></li>
						<li class="plc-step"><span class="plc-step__n">04</span><div class="plc-step__b"><h3 class="plc-h3">Deploy</h3><p class="plc-muted">Automate releases + iterate from real usage.</p></div></li>
					</ol>
				</div>
			</div>
		</section>

		<section class="plc-slide plc-slide--contact" data-slide>
			<div class="plc-slide__inner">
				<div class="plc-slide__layer plc-slide__layer--glow" aria-hidden="true" data-parallax data-depth="0.14"></div>
				<div class="plc-slide__content">
					<h2 class="plc-h2">Contact</h2>
					<p class="plc-muted">Temporary links for now.</p>
					<div class="plc-contact__links">
						<a class="plc-link" href="#">Email #</a>
						<a class="plc-link" href="#">LinkedIn #</a>
						<a class="plc-link" href="#">GitHub #</a>
					</div>
					<p class="plc-muted" style="margin-top:18px;">Scroll back up to replay the deck.</p>
				</div>
			</div>
		</section>
	</div>
</main>

<?php
get_footer();
