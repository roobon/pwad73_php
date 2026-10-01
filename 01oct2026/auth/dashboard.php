<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#f4f6f8">
	<title>Dashboard | Northstar</title>
	<link rel="stylesheet" href="dashboard.css">
</head>
<body>
	<div class="app-shell">
		<aside class="sidebar">
			<a class="brand" href="#overview" aria-label="Northstar home">
				<span class="brand-mark">N</span>
				<span>northstar<span class="brand-period">.</span></span>
			</a>

			<div class="workspace-label">WORKSPACE</div>
			<nav class="primary-nav" aria-label="Main navigation">
				<a class="nav-link active" href="#overview"><span class="nav-symbol">▦</span>Overview</a>
				<a class="nav-link" href="#students"><span class="nav-symbol">◉</span>Students<span class="nav-count">12</span></a>
				<a class="nav-link" href="#courses"><span class="nav-symbol">▤</span>Courses</a>
				<a class="nav-link" href="#reports"><span class="nav-symbol">▥</span>Reports</a>
			</nav>

			<div class="sidebar-bottom">
				<div class="help-panel">
					<span class="help-icon">?</span>
					<strong>Need a hand?</strong>
					<p>Visit the help center for tips and support.</p>
					<a href="mailto:support@northstar.example">Get support <span aria-hidden="true">↗</span></a>
				</div>
				<a class="profile" href="#profile">
					<span class="avatar avatar-admin">AM</span>
					<span class="profile-copy"><strong>Alex Morgan</strong><small>Administrator</small></span>
					<span class="profile-more" aria-hidden="true">···</span>
				</a>
			</div>
		</aside>

		<main class="main-content" id="overview">
			<header class="topbar">
				<div class="breadcrumbs"><span>Workspace</span><span class="breadcrumb-divider">/</span><strong>Overview</strong></div>
				<div class="topbar-actions">
					<span class="today-label">Thursday, October 1, 2026</span>
					<button class="icon-button" type="button" aria-label="Notifications">
						<span aria-hidden="true">♧</span><i class="notification-dot"></i>
					</button>
					<a class="top-avatar" href="#profile" aria-label="Alex Morgan profile">AM</a>
				</div>
			</header>

			<div class="page-content">
				<section class="welcome-row" aria-labelledby="page-title">
					<div>
						<p class="eyebrow">THURSDAY, OCTOBER 1</p>
						<h1 id="page-title">Good morning, Alex <span aria-hidden="true">✳</span></h1>
						<p class="welcome-copy">Here’s what’s happening across your learning community.</p>
					</div>
					<a class="primary-button" href="#students"><span aria-hidden="true">＋</span> Add a student</a>
				</section>

				<section class="stats-grid" id="reports" aria-label="Key statistics">
					<article class="stat-card">
						<div class="stat-heading"><span>Total students</span><span class="stat-icon mint">◉</span></div>
						<div class="stat-value">1,284</div>
						<div class="stat-foot"><span class="trend-up">↗ 8.2%</span><span>vs. last month</span></div>
						<div class="sparkline spark-students" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
					</article>
					<article class="stat-card">
						<div class="stat-heading"><span>Active courses</span><span class="stat-icon peach">▤</span></div>
						<div class="stat-value">32</div>
						<div class="stat-foot"><span class="trend-up">↗ 4.6%</span><span>vs. last month</span></div>
						<div class="sparkline spark-courses" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
					</article>
					<article class="stat-card">
						<div class="stat-heading"><span>Average attendance</span><span class="stat-icon sky">◷</span></div>
						<div class="stat-value">94.8<span class="value-unit">%</span></div>
						<div class="stat-foot"><span class="trend-up">↗ 1.3%</span><span>vs. last month</span></div>
						<div class="sparkline spark-attendance" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>
					</article>
					<article class="stat-card">
						<div class="stat-heading"><span>Needs review</span><span class="stat-icon lemon">!</span></div>
						<div class="stat-value">18</div>
						<div class="stat-foot"><span class="review-note">5 due today</span><span>across all courses</span></div>
						<div class="review-track" aria-hidden="true"><span></span></div>
					</article>
				</section>

				<section class="content-grid">
					<article class="panel activity-panel" id="students">
						<div class="panel-heading">
							<div><h2>Recently enrolled</h2><p>Your newest students this week</p></div>
							<a class="text-link" href="#students">View all <span aria-hidden="true">→</span></a>
						</div>
						<div class="table-wrap">
							<table>
								<thead><tr><th>STUDENT</th><th>COURSE</th><th>ENROLLED</th><th>STATUS</th></tr></thead>
								<tbody>
									<tr><td><div class="student-cell"><span class="avatar avatar-lilac">JL</span><span><strong>Jordan Lee</strong><small>jordan.lee@email.com</small></span></div></td><td>Product Design</td><td>Today</td><td><span class="status-pill status-active">Active</span></td></tr>
									<tr><td><div class="student-cell"><span class="avatar avatar-coral">SK</span><span><strong>Samira Khan</strong><small>samira.k@email.com</small></span></div></td><td>Web Development</td><td>Today</td><td><span class="status-pill status-active">Active</span></td></tr>
									<tr><td><div class="student-cell"><span class="avatar avatar-blue">MC</span><span><strong>Marcus Chen</strong><small>marcus.chen@email.com</small></span></div></td><td>Data Analytics</td><td>Yesterday</td><td><span class="status-pill status-pending">Pending</span></td></tr>
									<tr><td><div class="student-cell"><span class="avatar avatar-yellow">AP</span><span><strong>Ana Pérez</strong><small>ana.perez@email.com</small></span></div></td><td>Product Design</td><td>Sep 29, 2026</td><td><span class="status-pill status-active">Active</span></td></tr>
								</tbody>
							</table>
						</div>
					</article>

					<article class="panel courses-panel" id="courses">
						<div class="panel-heading">
							<div><h2>Top courses</h2><p>By student enrollment</p></div>
							<a class="more-link" href="#courses" aria-label="More course options">···</a>
						</div>
						<div class="course-list">
							<div class="course-item"><span class="course-art art-design">✳</span><div class="course-info"><strong>Product Design</strong><span>Design · 8 weeks</span></div><div class="course-count"><strong>342</strong><span>students</span></div></div>
							<div class="course-item"><span class="course-art art-code">&lt;/&gt;</span><div class="course-info"><strong>Web Development</strong><span>Technology · 12 weeks</span></div><div class="course-count"><strong>286</strong><span>students</span></div></div>
							<div class="course-item"><span class="course-art art-data">▥</span><div class="course-info"><strong>Data Analytics</strong><span>Business · 6 weeks</span></div><div class="course-count"><strong>215</strong><span>students</span></div></div>
						</div>
						<a class="all-courses-link" href="#courses">Explore all courses <span aria-hidden="true">→</span></a>
					</article>
				</section>

				<footer class="page-footer"><span>Northstar Learning</span><span>Made for better learning.</span></footer>
			</div>
		</main>
	</div>
</body>
</html>
