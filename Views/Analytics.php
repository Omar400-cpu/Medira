<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Most Asked Questions Analytics Dashboard</title>
    <link rel="stylesheet" href="/Medira/Media/css/Analytics.css">
    <link rel="stylesheet" href="/Medira/Media/css/NavBar.css">

</head>
<body>

<div id="navbar">
  <?php include "Adminnav.php"; ?>
  </div>
      
    <div class="dashboard">
        <!-- Header Section -->
        <header class="header">
            <h1>Most Asked Questions Analytics</h1>
            <div class="filters">
                <label>
                    Date Range:
                    <input type="date">
                </label>
                <label>
                    User Group:
                    <select>
                        <option>All Users</option>
                        <option>Healthcare Providers</option>
                        <option>Patients</option>
                    </select>
                </label>
            </div>
        </header>

        <!-- KPI Section -->
        <section class="kpi-section">
            <div class="kpi">
                <h3>Total Questions Asked</h3>
                <p>1,230</p>
            </div>
            <div class="kpi">
                <h3>Most Popular Category</h3>
                <p>Technical</p>
            </div>
           
        </section>

        <!-- Main Content -->
        <section class="main-content">
            <!-- Top Questions List -->
            <div class="top-questions">
                <h2>Top 10 Most Asked Questions</h2>
                <ul>
                    <li>How to know i have cancer? <span>120 times</span></li>
                    <li>How to start in chemotherapy? <span>90 times</span></li>
                    <li>Best Treatment for cancer <span>80 times</span></li>
                    <!-- Add more questions as needed -->
                </ul>
            </div>

            <!-- Pie Chart and Bar Chart Section -->
            <div class="charts">
                <!-- Pie Chart -->
                <div class="pie-chart">
                    <h2>Question Categories</h2>
                    <div class="chart-placeholder">Pie Chart</div>
                </div>

                <!-- Bar Chart -->
                <div class="bar-chart">
                    <h2>User Engagement by Group</h2>
                    <div class="chart-placeholder">Bar Chart</div>
                </div>
            </div>

            <!-- Trends and Heatmap Section -->
            <div class="trend-heatmap">
                <!-- Line Graph -->
                <div class="line-chart">
                    <h2>Question Submission Trends Over Time</h2>
                    <div class="chart-placeholder">Line Graph</div>
                </div>

                <!-- Heatmap -->
                <div class="heatmap">
                    <h2>Response Accuracy by Question Type</h2>
                    <div class="chart-placeholder">Heatmap</div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
