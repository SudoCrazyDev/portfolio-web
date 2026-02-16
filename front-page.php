<?php
/**
 * Front Page template
 *
 * A one-page portfolio (dark mode) optimized for speed with bold, tasteful animation hooks.
 *
 * @package plcalub-theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<section id="top" class="plc-hero">
		<div class="plc-container">
			<div class="plc-hero__grid">
				<div class="plc-hero__content">
					<p class="plc-eyebrow" data-anim="fade">Fullstack Web Developer</p>
					<h1 class="plc-hero__title" data-anim="title">
						I build high-performance web products—from UI to infrastructure.
					</h1>
					<p class="plc-hero__sub" data-anim="fade" data-anim-delay="0.05">
						Frontend • Backend • DevOps. Clean UX, reliable systems, measurable results.
					</p>

					<div class="plc-hero__cta" data-anim="fade" data-anim-delay="0.10">
						<a class="plc-btn plc-btn--primary" href="#work">View Work</a>
						<a class="plc-btn plc-btn--ghost" href="#contact">Contact</a>
					</div>

					<div class="plc-proof" data-anim="fade" data-anim-delay="0.15">
						<div class="plc-proof__item">
							<span class="plc-proof__k">Focus</span>
							<span class="plc-proof__v">Speed + UI polish</span>
						</div>
						<div class="plc-proof__item">
							<span class="plc-proof__k">Stack</span>
							<span class="plc-proof__v">WordPress • Node • CI/CD</span>
						</div>
						<div class="plc-proof__item">
							<span class="plc-proof__k">Delivery</span>
							<span class="plc-proof__v">Design → Build → Deploy</span>
						</div>
					</div>
				</div>

				<div class="plc-hero__visual" aria-hidden="true">
					<div class="plc-orb" data-anim="orb"></div>
					<div class="plc-grid" data-anim="grid"></div>
				</div>
			</div>
		</div>
	</section>

	<section id="work" class="plc-section">
		<div class="plc-container">
			<div class="plc-section__head">
				<h2 class="plc-h2" data-anim="fade">Selected Work</h2>
				<p class="plc-muted" data-anim="fade" data-anim-delay="0.05">Six projects (placeholder names for now). We’ll replace these with your real case studies.</p>
			</div>

			<div class="plc-cards">
				<a class="plc-card" href="#" data-anim="card">
					<div class="plc-card__top">
						<span class="plc-tag">UI + Backend</span>
						<span class="plc-card__year">2026</span>
					</div>
					<h3 class="plc-card__title">Nebula CRM</h3>
					<p class="plc-card__desc">A fast, role-based CRM with automation, audit trails, and clean workflows.</p>
				</a>

				<a class="plc-card" href="#" data-anim="card">
					<div class="plc-card__top">
						<span class="plc-tag">Data + Dashboards</span>
						<span class="plc-card__year">2026</span>
					</div>
					<h3 class="plc-card__title">Pulse Analytics</h3>
					<p class="plc-card__desc">A metrics hub with blazing charts, alerts, and stakeholder-ready reporting.</p>
				</a>

				<a class="plc-card" href="#" data-anim="card">
					<div class="plc-card__top">
						<span class="plc-tag">DevOps</span>
						<span class="plc-card__year">2026</span>
					</div>
					<h3 class="plc-card__title">Atlas Deploy</h3>
					<p class="plc-card__desc">A CI/CD pipeline blueprint: safe releases, previews, and auto rollbacks.</p>
				</a>

				<a class="plc-card" href="#" data-anim="card">
					<div class="plc-card__top">
						<span class="plc-tag">Ecommerce</span>
						<span class="plc-card__year">2025</span>
					</div>
					<h3 class="plc-card__title">Aether Commerce</h3>
					<p class="plc-card__desc">A conversion-focused storefront with performance budgets and motion polish.</p>
				</a>

				<a class="plc-card" href="#" data-anim="card">
					<div class="plc-card__top">
						<span class="plc-tag">Systems</span>
						<span class="plc-card__year">2025</span>
					</div>
					<h3 class="plc-card__title">Kairo Scheduler</h3>
					<p class="plc-card__desc">Scheduling engine with queues, retries, timezones, and clean admin UX.</p>
				</a>

				<a class="plc-card" href="#" data-anim="card">
					<div class="plc-card__top">
						<span class="plc-tag">CMS</span>
						<span class="plc-card__year">2025</span>
					</div>
					<h3 class="plc-card__title">Nimbus Portfolio CMS</h3>
					<p class="plc-card__desc">A content system built for speed: typed content, components, and SEO sanity.</p>
				</a>
			</div>
		</div>
	</section>

	<section id="capabilities" class="plc-section plc-section--alt">
		<div class="plc-container">
			<div class="plc-section__head">
				<h2 class="plc-h2" data-anim="fade">Capabilities</h2>
				<p class="plc-muted" data-anim="fade" data-anim-delay="0.05">End-to-end delivery across product, code, and deployment.</p>
			</div>

			<div class="plc-cols">
				<div class="plc-col" data-anim="fade">
					<h3 class="plc-h3">Frontend</h3>
					<ul class="plc-list">
						<li>Design systems, motion, microinteractions</li>
						<li>Performance-first UI implementation</li>
						<li>Accessible, responsive layouts</li>
					</ul>
				</div>
				<div class="plc-col" data-anim="fade" data-anim-delay="0.05">
					<h3 class="plc-h3">Backend</h3>
					<ul class="plc-list">
						<li>APIs, auth, data modeling</li>
						<li>Automation + integrations</li>
						<li>Observability and pragmatic architecture</li>
					</ul>
				</div>
				<div class="plc-col" data-anim="fade" data-anim-delay="0.10">
					<h3 class="plc-h3">DevOps</h3>
					<ul class="plc-list">
						<li>CI/CD, environments, safe deploys</li>
						<li>Linux, hosting, uptime hygiene</li>
						<li>Monitoring + rollback strategy</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="process" class="plc-section">
		<div class="plc-container">
			<div class="plc-section__head">
				<h2 class="plc-h2" data-anim="fade">How I Work</h2>
				<p class="plc-muted" data-anim="fade" data-anim-delay="0.05">A simple process, executed relentlessly.</p>
			</div>

			<ol class="plc-steps">
				<li class="plc-step" data-anim="fade">
					<span class="plc-step__n">01</span>
					<div class="plc-step__b">
						<h3 class="plc-h3">Clarify</h3>
						<p class="plc-muted">Define the goal, constraints, and what “good” looks like.</p>
					</div>
				</li>
				<li class="plc-step" data-anim="fade" data-anim-delay="0.05">
					<span class="plc-step__n">02</span>
					<div class="plc-step__b">
						<h3 class="plc-h3">Design + Prototype</h3>
						<p class="plc-muted">Fast iteration on UX, components, and motion.</p>
					</div>
				</li>
				<li class="plc-step" data-anim="fade" data-anim-delay="0.10">
					<span class="plc-step__n">03</span>
					<div class="plc-step__b">
						<h3 class="plc-h3">Build</h3>
						<p class="plc-muted">Ship clean code, keep performance budgets, test edge cases.</p>
					</div>
				</li>
				<li class="plc-step" data-anim="fade" data-anim-delay="0.15">
					<span class="plc-step__n">04</span>
					<div class="plc-step__b">
						<h3 class="plc-h3">Deploy + Improve</h3>
						<p class="plc-muted">Automate releases, monitor, iterate based on real usage.</p>
					</div>
				</li>
			</ol>
		</div>
	</section>

	<section id="about" class="plc-section plc-section--alt">
		<div class="plc-container">
			<div class="plc-about">
				<div>
					<h2 class="plc-h2" data-anim="fade">About</h2>
					<p class="plc-muted" data-anim="fade" data-anim-delay="0.05">
						I’m Philip Louis Calub — a Fullstack Web Developer who cares about product quality, performance, and deployment reliability.
					</p>
				</div>
				<div class="plc-about__chips" data-anim="fade" data-anim-delay="0.10">
					<span class="plc-chip">Frontend</span>
					<span class="plc-chip">Backend</span>
					<span class="plc-chip">DevOps</span>
					<span class="plc-chip">WordPress</span>
					<span class="plc-chip">Performance</span>
					<span class="plc-chip">Motion</span>
				</div>
			</div>
		</div>
	</section>

	<section id="contact" class="plc-section">
		<div class="plc-container">
			<div class="plc-contact" data-anim="fade">
				<h2 class="plc-h2">Let’s build something that feels expensive.</h2>
				<p class="plc-muted">Contacts are placeholders for now.</p>
				<div class="plc-contact__links">
					<a class="plc-link" href="#">Email #</a>
					<a class="plc-link" href="#">LinkedIn #</a>
					<a class="plc-link" href="#">GitHub #</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
