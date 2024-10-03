<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor</title>
    <link rel="stylesheet" href="sup.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <div class="sidebar-custom">
        <h2>Omar Smith</h2>
        <div class="avatar-container-custom">
            <div class="avatar-custom">
            <img src="15.avif" alt="User Avatar" class="user-avatar-custom">

                <span class="status-custom active"></span>
            </div>
        </div>
        
        <a href="#" onclick="showTab('dashboard')" class="active">Dashboard</a>
        <a href="#" onclick="showTab('reports')">Reports</a>
        <a href="#" onclick="showTab('schedual')">Schedual</a>
        <a href="#" onclick="showTab('profile')">Profile</a>
        <a href="#" onclick="showTab('settings')">Settings</a>
        <a href="#" onclick="showTab('contact')">Contact Us</a>
        <hr>
        <a href="logout.php">Logout</a>
    </div>
    <div class="main-content-custom">
        <div class="header-custom">
        <img src="logo.png" alt="Company Icon" class="company-icon">


    <button class="notification-btn-custom" onclick="toggleNotificationDropdown()">🔔</button>
    <div class="notification-dropdown-custom" id="notificationDropdown">
        <h3>Notifications</h3>
        <ul class="notifications-list-custom">
            <li>New report assigned to you: REP-701</li>
            <li>Reminder: Submit monthly review report by 10/12/2023</li>
            <li>Document uploaded by Michael Brown requires approval</li>
            <!-- Add more notifications as needed -->
        </ul>
    </div>
        </div>
        <div class="tab-content-custom active" id="dashboard">

            <!-- Dashboard Layout: Flex Container -->
            <div class="dashboard-layout-custom">
                <!-- Survey Card Section -->
                <div class="survey-card-section-custom">
                    <h3>New Surveys</h3>
                    <div class="survey-card-custom">
                        <h4>Challenges in Employee Collaboration</h4>
                        <p>by Layla Soner</p>
                        <p>Deadline 20.2.2023</p>
                        <p>This survey is designed to collect insights from supervisors on the most common challenges faced when fostering collaboration among team members. Your input is crucial in helping us create a more collaborative work environment.</p>
                        <div class="survey-card-actions-custom">
                            <button class="survey-card-btn-custom">Take Survey</button>
                        </div>
                    </div>
                </div>
                <div class="summary-table-section-custom">
        <h2>Summary</h2>
        <table class="summary-table-custom">
            <thead>
                <tr>
                    <th>Metric</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Total Sales</td>
                    <td>$120,000</td>
                </tr>
                <tr>
                    <td>Active Users</td>
                    <td>3,500</td>
                </tr>
                <tr>
                    <td>Pending Tasks</td>
                    <td>15</td>
                </tr>
            </tbody>
        </table>
    </div>
            </div>
            <div class="horizontal-charts-container">

            <div class="conflict-trend-section-custom">
    <h4 class="conflict-trend-header-custom">Conflict Trend by Department</h4>
    <div class="chart-container-custom">
        <canvas id="conflictTrendChart"></canvas>
    </div>
</div>
<div class="department-performance-section-custom">
    <h4 class="department-performance-header-custom">Department Performance</h4>
    <div class="chart-container-custom">
        <canvas id="departmentPerformanceChart"></canvas>
    </div>
</div>
</div>
 
            
            

            <div class="upcoming-deadlines-section-custom">
                <h3>Upcoming Deadlines</h3>
                <table class="deadlines-table-custom">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Department</th>
                            <th>Deadline</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Finalize Budget Report</td>
                            <td>Finance</td>
                            <td>10/09/2024</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>Complete Employee Training</td>
                            <td>HR</td>
                            <td>15/09/2024</td>
                            <td>In Progress</td>
                        </tr>
                        <tr>
                            <td>Submit Project Analysis</td>
                            <td>Operations</td>
                            <td>20/09/2024</td>
                            <td>Completed</td>
                        </tr>
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>
            <div class="performance-insights-section-custom">
                <div class="insights-container-custom">
                    <div class="insight-card-custom">
                        <h4>Meeting Effectiveness Score</h4>
                        <canvas id="closureRateChart"></canvas>
                    </div>
                    <div class="insight-card-custom">
                        <h4>Average Resolution Time</h4>
                        <canvas id="resolutionTimeChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Recent Activities Section -->
            <div class="recent-activities-section-custom">
                <ul class="activity-list-custom">
                    <li>
                        <span class="activity-category">Task Update</span>
                        <p class="activity-description">John Doe submitted the final budget report for Q4 review.</p>
                        <p class="activity-time">2 hours ago</p>
                        <div class="activity-actions">
                            <button class="action-btn-custom">View Details</button>
                            <button class="action-btn-custom">Acknowledge</button>
                        </div>
                        <p class="activity-impact">Impact Score: <strong>4/5</strong></p>
                    </li>
                    <li>
                        <span class="activity-category">Meeting Highlight</span>
                        <p class="activity-description">Key decisions made in the Product Strategy Meeting.</p>
                        <p class="activity-time">Yesterday</p>
                        <div class="activity-actions">
                            <button class="action-btn-custom">View Summary</button>
                            <button class="action-btn-custom">Follow Up</button>
                        </div>
                        <p class="activity-impact">Impact Score: <strong>5/5</strong></p>
                    </li>
                    <!-- More activities as needed -->
                </ul>
            </div>

            <!-- New Section: Company Announcements -->
            
            <!-- New Section: Team Chat -->
        

       </div>
        <div class="tab-content-custom" id="reports">
        <div class="report-tabs-custom">
    <button class="report-tab-button-custom active" onclick="showReportTab('pending-custom')">Pending</button>
    <button class="report-tab-button-custom" onclick="showReportTab('in-progress-custom')">In Progress</button>
    <button class="report-tab-button-custom" onclick="showReportTab('closed-custom')">Closed</button>
</div>

<!-- Pending Reports Tab Content -->
<div class="report-tab-content-custom active" id="pending-custom">
    <h3>Pending Reports</h3>
    <div class="table-container-custom">
        <table class="custom-report-table">
            <thead>
                <tr>
                    <th>Reporter ID</th>
                    <th>Reporter</th>
                    <th>DEP involved</th>
                    <th>Report ID</th>
                    <th>Date Reported</th>
                    <th>Conflict Type</th>
                    <th>Priority Level</th>
                    <th>Description</th>
                    <th>Statue</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#" onclick="showEmployeeDetails('E1001')">E1001</a></td>
                    <td>John Doe</td>
                <td>Finance
                        Marketing
                    </td>
                    <td>R001</td>
                    <td>3.12.2023</td>
                    <td>Quality Assurance Delays

</td>
                    <td>Low</td>
                    <td>Quality Standard,Production Speed</td>
                    
                    <td>waiting for approvel...</td>
                </tr>
                <tr>
                    <td><a href="#" onclick="showEmployeeDetails('E1002')">E1002</a></td>
                    <td>Jane Smith</td>
                <td>Production 
                Procurement
                </td>
                    <td>R002</td>
                    <td>4.4.2024</td>
                    <td>Project Dispute</td>
                    <td>High</td>
                    <td>Quality inspectors reject products not meeting standards, slowing down the line and frustrating Production, which is pressured to increase output.</td>
                    <td>waiting for approvel...</td>
                </tr>
                <tr>
                    <td><a href="#" onclick="showEmployeeDetails('E1003')">E1003</a></td>
                    <td>Jane Smith</td>
                <td>Design 
                    Production</td>
                <td>R003</td>
                <td>4.12.2023</td>
                <td>Innovative Designs,Manufacturing Constraints</td>
                <td>High</td>
                <td> Design team develops complex product features that are hard to produce at scale, leading to tension over feasibility and cost.</td>
                <td>waiting for approvel...</td>
            </tr>
            <tr>
                <td><a href="#" onclick="showEmployeeDetails('E1004')">E1004</a></td>
                <td>Michael Brown</td>
                <td>Cost Management
                    Production</td>
                <td>R004</td>
                <td>5.12.2023</td>
                <td>Cost-Saving Measures,Quality Expectations</td>
                <td>Medium</td>
                <td>Cost Management demands reductions in material costs or process expenses, but this affects the quality and consistency of the products.</td>
                <td>waiting for approvel...</td>
            </tr>
            <tr>
                <td><a href="#" onclick="showEmployeeDetails('E1005')">E1005</a></td>
                <td>Emily Clark</td>
                <td>Packaging 
                     Production</td>
                <td>R005</td>
                <td>6.12.2023</td>
                <td>Packaging Delays,Production Output</td>
                <td>Low</td>
                <td> The Packaging team is delayed because Production outputs are inconsistent or below the expected volume.</td>
                <td>waiting for approvel...</td>
            </tr>
            <tr>
                <td><a href="#" onclick="showEmployeeDetails('E1006')">E1006</a></td>
                <td>Chris Evans</td>
                <td>Product Development
                    Sales
                </td>
                <td>R006</td>
                <td>7.12.2023</td>
                <td>Resource Allocation ,New Product Priorities</td>
                <td>Medium</td>
                <td>Different views on project strategyNew Product Development requires cross-departmental resources, causing conflict over which projects should get priority.</td>
                <td>waiting for approvel...</td>
            </tr>   <!-- More rows can be added here -->
            </tbody>
        </table>
    </div>
</div>

<!-- In Progress Reports Tab Content -->
<div class="report-tab-content-custom" id="in-progress-custom">
    <h3>In Progress Reports</h3>
    <div class="table-container-custom">
        <table class="custom-report-table">
            <thead>
                <tr>
                <th>Reporter ID</th>
                    <th>Reporter</th>
                    <th>DEP involved</th>
                    <th>Report ID</th>
                    <th>Date Reported</th>
                    <th>Conflict Type</th>
                    <th>Priority Level</th>
                    <th>Description</th>
                    <th>Progress Statue</th>
                    <th> Progress %</th>
               
               
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#" onclick="showEmployeeDetails('E1007')">E1007</a></td>
                    <td>John Doe</td>
                    <td>Finance
                        Marketing
                    </td>
                    <td>R007</td>
                    <td>3.12.2023</td>
                    <td>Budget Constrain</td>
                    <td>Low</td>
                    <td>Funding Limitations</td>
                    
                    <td>Schedual Meeting</td>
                    <td>40%</td>
                    <td><button class="action-btn-custom">Upload</button></td>
                </tr>
                <tr>
                    <td><a href="#" onclick="showEmployeeDetails('E1008')">E1008</a></td>
                    <td>John Doe</td>
                     <td>Sales
                     Production
                    </td>
                    <td>R008</td>
                    <td>3.12.2023</td>
                    <td>Deadline Misalignment</td>
                    <td>Low</td>
                    <td>ales commits to tight deadlines; Production struggles to meet them.</td>
                    
                    <td>Schedual Meeting</td>
                    <td>40%</td>
                    <td><button class="action-btn-custom">Upload</button></td>
                </tr>
                <tr>
                    <td><a href="#" onclick="showEmployeeDetails('E1009')">E1009</a></td>
                    <td>Michael Brown</td>
                <td>IT, Finance</td>
                <td>R009</td>
                <td>5.12.2023</td>
                <td>Technology Disruptions</td>
                <td>Critical</td>
                <td> IT changes disrupt operations; departments resist new systems.</td>
                <td>Investigation Ongoing</td>
                <td>80%</td>
                <td><button class="action-btn-custom">Upload</button></td>
            </tr><!-- More rows can be added here -->
            </tbody>
        </table>
        
    </div>
    <div class="upload-documents-section-custom">
        <h4>Upload Documents to Managers</h4>
        <input type="text" id="documentTitle" placeholder="Document Title" class="upload-input-custom">
        <input type="file" id="documentUpload" class="upload-input-custom" multiple>
        <button onclick="uploadDocumentsToManager()" class="upload-btn-custom">Upload</button>
    </div>

    <!-- Table for Documents Received from Employees -->
    <div class="received-documents-section-custom">
        <h4>Documents Received from Employees</h4>
        <table class="received-documents-table-custom">
            <thead>
                <tr>
                    <th>Document Name</th>
                    <th>Submitted By</th>
                    <th>Date Submitted</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example rows -->
                <tr>
                    <td>Budget Report.pdf</td>
                    <td>John Doe</td>
                    <td>03/12/2023</td>
                    <td>
                        <button onclick="previewDocument('Budget Report.pdf')">Preview</button>
                        <button onclick="downloadDocument('Budget Report.pdf')">Download</button>
                    </td>
                </tr>
                <tr>
                    <td>Marketing Plan.docx</td>
                    <td>Jane Smith</td>
                    <td>04/12/2023</td>
                    <td>
                        <button onclick="previewDocument('Marketing Plan.docx')">Preview</button>
                        <button onclick="downloadDocument('Marketing Plan.docx')">Download</button>
                    </td>
                </tr>
                <!-- More rows can be added here -->
            </tbody>
        </table>
    </div>
</div>

<!-- Closed Reports Tab Content -->
<div class="report-tab-content-custom" id="closed-custom">
    <h3>Closed Reports</h3>
    <div class="closed-reports-table">
        <table class="custom-report-table">
            <thead>
                <tr>
                    <th>Report ID</th>
                    
                    <th>Date Closed</th>
                    <th>Result</th>
                    <th>Outcome Details</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                <tr>
                <td>R101</td>
                <td>01.12.2023</td>
                <td>Solved</td>
                <td>closed</td>
            </tr>
                </tr>
                <tr>
                <td>R102</td>
                <td>02.12.2023</td>
                <td>Unsolved</td>
                <td>Closed</td>
            </tr>
            <tr>
                <td>R103</td>
                <td>03.12.2023</td>
                <td>Solved</td>
                <td>Closed</td>
            </tr> 
            <tr>
                <td>R104</td>
                <td>04.12.2023</td>
                <td>Escalated</td>
                <td>Escalated to higher management.</td>
            </tr>
            <!-- More rows can be added here -->
            </tbody>
        </table>
    </div>
</div>

        </div>
        <div class="tab-content-custom" id="schedual">
    <h3 class="schedual-title-custom">Schedual</h3>
    <div class="filter-container-custom">
        <select class="schedual-filter-custom" id="schedualFilter" onchange="filterSchedual()">
            <option value="all">All</option>
           
            <option value="supervisors">Employee</option>
            <option value="manager">Manager</option>
        </select>
    </div>
    <div class="schedual-table-container-custom">
        <!-- Schedual Table -->
        <table class="schedual-table-custom" id="schedualTable">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Meeting Title</th>
                    <th>Participant(s)</th>
                    <th>Role</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="schedual-employees">
                    <td>9:00 AM</td>
                    <td>Project Kickoff</td>
                    <td>John Doe, Jane Smith</td>
                    <td>Employee</td>
                    <td>Conference Room A</td>
                    <td>Scheduled</td>
                    <td><button class="action-btn-custom">Reschedule</button></td>
                </tr>
                <tr class="schedual-supervisors">
                    <td>10:30 AM</td>
                    <td>Team Review</td>
                    <td>Michael Brown</td>
                    <td>Employee</td>
                    <td>Meeting Room 2</td>
                    <td>In Progress</td>
                    <td>.....</td>
                </tr>
                <tr class="schedual-manager">
                    <td>1:00 PM</td>
                    <td>Outcome Report</td>
                    <td>Sarah Williams</td>
                    <td>Manager</td>
                    <td>Executive Office</td>
                    <td>Pending</td>
                    <td>.....</td>
                </tr>
                <!-- More rows can be added to simulate a large schedule -->
            </tbody>
        </table>
    </div>
    <div class="calendar-container-custom">
    <div class="calendar-header-custom">
      <h1>November</h1>
      <button>▾</button>
      <p>2023</p>
    </div>
    <div class="calendar-custom">
      <!-- Day Names -->
      <span class="day-name-custom">Mon</span>
      <span class="day-name-custom">Tue</span>
      <span class="day-name-custom">Wed</span>
      <span class="day-name-custom">Thu</span>
      <span class="day-name-custom">Fri</span>
      <span class="day-name-custom">Sat</span>
      <span class="day-name-custom">Sun</span>

      <!-- Calendar Days -->
      <!-- Disabled days -->
      <div class="day-custom day-disabled-custom">30</div>
      <div class="day-custom day-disabled-custom">31</div>
      <!-- Active days -->
      <div class="day-custom">1</div>
      <div class="day-custom">2</div>
      <div class="day-custom">3</div>
      <div class="day-custom">4</div>
      <div class="day-custom">5</div>
      <div class="day-custom">6</div>
      <div class="day-custom">7</div>
      <div class="day-custom">8</div>
      <div class="day-custom">9</div>
      <div class="day-custom">10</div>
      <div class="day-custom">11</div>
      <div class="day-custom">12</div>
      <div class="day-custom">13</div>
      <div class="day-custom">14</div>
      <div class="day-custom">15</div>
      <div class="day-custom">16</div>
      <div class="day-custom">17</div>
      <div class="day-custom">18</div>
      <div class="day-custom">19</div>
      <div class="day-custom">20</div>
      <div class="day-custom">21</div>
      <div class="day-custom">22</div>
      <div class="day-custom">23</div>
      <div class="day-custom">24</div>
      <div class="day-custom">25</div>
      <div class="day-custom">26</div>
      <div class="day-custom">27</div>
      <div class="day-custom">28</div>
      <div class="day-custom">29</div>
      <div class="day-custom">30</div>
      <div class="day-custom">1</div>
      <div class="day-custom">2</div>

      <!-- Task Sections -->
      <section class="task-custom task-warning-custom">Meeting R105</section>
      <section class="task-custom task-danger-custom">Meeting R103</section>
      <section class="task-custom task-primary-custom">Close-up case R109, manager</section>
    
      <section class="task-custom task-info-custom">Meeting R106</section>
    </div></div>
</div>

        <div class="tab-content-custom" id="profile">
        <h3 class="profile-title">Your Profile</h3>
    <di="profile-container">
        <div class="profile-picture">
            <img src="15.avif" alt="Profile Picture" class="profile-img">
            <button class="profile-edit-btn">Change Photo</button>
        </div>
        <div class="profile-details">
            <!-- Personal Information Section -->
            <h4 class="profile-section-title">Personal Information</h4>
            <div class="form-group profile-group">
                <label for="profile-name">user name</label>
                <input type="text" id="profile-name" placeholder="Enter your full name" value="omar_smith">
            </div>
            <div class="form-group profile-group">
                <label for="profile-id">Employee ID</label>
                <input type="text" id="profile-id" placeholder="Enter your employee ID" value="E1313">
            </div>
            <div class="form-group profile-group">
                <label for="profile-role">Role</label>
                <input type="text" id="profile-role" placeholder="Enter your role" value="Supervisor">
            </div>
            <div class="form-group profile-group">
                <label for="profile-phone">Phone Number</label>
                <input type="tel" id="profile-phone" placeholder="Enter your phone number" value="+1 (555) 678-4567">
            </div>

            <!-- Company Information Section -->
            <h4 class="profile-section-title">Company Information</h4>
            <div class="form-group profile-group">
                <label for="company-domain">Company Domain</label>
                <input type="text" id="company-domain" placeholder="Enter company domain" value="company.com">
            </div>
            <div class="form-group profile-group">
                <label for="company-address">Company Address</label>
                <input type="text" id="company-address" placeholder="Enter company address" value="1234 Elm Street, New York, NY">
            </div>
            <div class="form-group profile-group">
                <label for="company-zip">Zip Code</label>
                <input type="text" id="company-zip" placeholder="Enter company zip code" value="10001">
            </div>
            <div class="form-group profile-group">
                <label for="company-url">Company Website URL</label>
                <input type="url" id="company-url" placeholder="Enter company website URL" value="https://www.company.com">
            </div>
            <div class="form-group profile-group">
                <label for="company-industry">Industry</label>
                <input type="text" id="company-industry" placeholder="Enter company industry" value="Manufacturing">
            </div>

            <!-- Save Button -->
            <div class="form-group profile-group">
                <button class="profile-save-btn">Save Changes</button>
            </div>
        </div>
        </div>
        <div class="tab-content-custom" id="settings">
            <h2>Settings</h2>
            <div class="settings-section">
                <h3>Account Management</h3>
                <label for="settings-username">Username:</label>
                <input type="text" id="settings-username" placeholder="Enter your username" value="layle.smith">
                <label for="settings-password">Change Password:</label>
                <input type="password" id="settings-password" placeholder="Enter new password">
                <label for="settings-language">Preferred Language:</label>
                <select id="settings-language">
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                    <option value="fr">French</option>
                    <option value="de">German</option>
                </select>
                <button class="settings-save-btn-custom">Save Changes</button>
            </div>
        </div>
        <div class="tab-content-custom" id="contact">
            <h2>Contact Us</h2>
            <div class="contact-section">
                <form>
                    <label for="contact-name">Name:</label>
                    <input type="text" id="contact-name" placeholder="Your Name">
                    <label for="contact-email">Email:</label>
                    <input type="email" id="contact-email" placeholder="Your Email">
                    <label for="contact-message">Message:</label>
                    <textarea id="contact-message" rows="4" placeholder="Your Message"></textarea>
                    <button type="submit" class="contact-submit-btn">Send Message</button>
                </form>
                <div class="contact-details-custom">
                    <p>Phone: 001 1023 567</p>
                    <p>Email: contact@company.com</p>
                </div>
            </div>
        </div>
        <div id="infoModalCustom" class="modal-custom">
            <div class="modal-content-custom">
                <span class="close-btn-custom" onclick="closeEmployeePopup()">&times;</span>
                <h2 id="modalTitleCustom">Employee Details</h2>
                <div id="employeeDetailsContainer">
                    <!-- Employee details will be dynamically injected here by JavaScript -->
                </div>
            </div>
        </div>
        <script>
        function showTab(tabId) {
    document.querySelectorAll('.tab-content-custom').forEach(function(tabContent) {
        tabContent.classList.remove('active');
    });
    document.querySelectorAll('.sidebar-custom a').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(tabId).classList.add('active');
    document.querySelector('.sidebar-custom a[onclick="showTab(\'' + tabId + '\')"]').classList.add('active');
}

function showReportTab(reportTabId) {
    document.querySelectorAll('.report-tab-content-custom').forEach(function(tabContent) {
        tabContent.classList.remove('active');
    });
    document.querySelectorAll('.report-tab-button-custom').forEach(function(tab) {
        tab.classList.remove('active');
    });
    document.getElementById(reportTabId).classList.add('active');
    document.querySelector('.report-tab-button-custom[onclick="showReportTab(\'' + reportTabId + '\')"]').classList.add('active');
}

function showEmployeeDetails(employeeId) {
    const employeeData = getEmployeeData(employeeId);
    document.getElementById('employeeDetailsContainer').innerHTML = employeeData;
    document.getElementById('infoModalCustom').style.display = 'block';
}

function closeEmployeePopup() {
    document.getElementById('infoModalCustom').style.display = 'none';
}

function getEmployeeData(employeeId) {
    const employeeDetails = {
        'E1001': `
            <p><strong>ID:</strong> E1001</p>
            <p><strong>Name:</strong> Alice Johnson</p>
            <p><strong>Department:</strong> Procurement</p>
            <p><strong>Years of Experience:</strong> 5</p>
            <p><strong>Reports History:</strong> 10 reports</p>
            <p><strong>Schedule:</strong> Monday to Friday, 9 AM - 5 PM</p>
            <p><strong>Current Role:</strong> Procurement Specialist</p>
        `,
        'E1002': `
            <p><strong>ID:</strong> E1002</p>
            <p><strong>Name:</strong> John Williams</p>
            <p><strong>Department:</strong> Logistics</p>
            <p><strong>Years of Experience:</strong> 8</p>
            <p><strong>Reports History:</strong> 12 reports</p>
            <p><strong>Schedule:</strong> Monday to Friday, 8 AM - 4 PM</p>
            <p><strong>Current Role:</strong> Logistics Coordinator</p>
        `,
        // More employee data as needed
    };
    return employeeDetails[employeeId] || `<p>No data available for ${employeeId}</p>`;
}

window.onclick = function(event) {
    const modal = document.getElementById('infoModalCustom');
    const dropdown = document.getElementById('notificationDropdown');
    const button = document.querySelector('.notification-btn-custom');

    if (event.target === modal) {
        modal.style.display = 'none';
    }

    if (event.target !== dropdown && event.target !== button) {
        dropdown.style.display = 'none';
    }
};


   
    <!-- Modal for Employee Info -->



function filterSchedual() {
    const filter = document.getElementById('schedualFilter').value;
    const rows = document.querySelectorAll('.schedual-table-custom tbody tr');
    
    rows.forEach(row => {
        if (filter === 'all' || row.classList.contains(`schedual-${filter}`)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}


    // Function to display received documents in a modal popup
    function showReceivedDocuments(reportId) {
        alert(`Showing documents received for Report ID: ${reportId}`);
        // Example: This function would show the relevant documents for the selected report
    }

    // Function to handle uploading documents to managers
    function uploadDocumentsToManager() {
        const title = document.getElementById('documentTitle').value;
        const files = document.getElementById('documentUpload').files;
        
        if (title && files.length > 0) {
            alert(`Document "${title}" successfully uploaded to the manager!`);
            // Implement actual upload functionality here
        } else {
            alert('Please enter a document title and select files to upload.');
        }
    }

    // Example document actions (to be implemented)
    function previewDocument(name) {
        alert(`Previewing document: ${name}`);
    }
    
    function downloadDocument(name) {
        alert(`Downloading document: ${name}`);
    }

// Sample data for the charts
const closureRateData = {
    labels: ['Jan', 'Apr', 'Aug', 'Nov'],
    datasets: [{
        label: 'Effectiveness Score',
        data: [1,2, 3,4 ], // Example scores
        backgroundColor: 'rgba(70, 130, 180, 0.2)', // Light blue fill
        borderColor: '#4682B4', // Steel blue border
        borderWidth: 1
    }]
};

const resolutionTimeData = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
        label: 'Average Resolution Time (days)',
        data: [7, 6, 8, 5, 4, 5, 6, 7, 5, 3, 4, 2],
        backgroundColor: 'rgba(38, 97, 185, 0.2)',
        borderColor: '#2661b9',
        borderWidth: 1
    }]
};

// Initialize the charts
const ctx1 = document.getElementById('closureRateChart').getContext('2d');
const closureRateChart = new Chart(ctx1, {
    type: 'line',
    data: closureRateData,
    options: { responsive: true }
});

const ctx2 = document.getElementById('resolutionTimeChart').getContext('2d');
const resolutionTimeChart = new Chart(ctx2, {
    type: 'line',
    data: resolutionTimeData,
    options: { responsive: true }
});

function toggleNotificationDropdown() {
    const dropdown = document.getElementById('notificationDropdown');
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
}

// Close the dropdown if clicking outside of it
// Close modal or dropdown when clicking outside of them
window.onclick = function(event) {
    const modal = document.getElementById('infoModalCustom');
    const dropdown = document.getElementById('notificationDropdown');
    const button = document.querySelector('.notification-btn-custom');

    if (event.target === modal) {
        modal.style.display = 'none';
    }

    if (event.target !== dropdown && event.target !== button) {
        dropdown.style.display = 'none';
    }
};

function sendMessage() {
    var chatInput = document.getElementById("chat-input");
    var chatBox = document.getElementById("chat-box");

    if (chatInput.value.trim() !== "") {
        var newMessage = document.createElement("div");
        newMessage.className = "chat-message";
        newMessage.innerHTML = `<strong>You:</strong> ${chatInput.value.trim()}`;

        chatBox.appendChild(newMessage);
        chatBox.scrollTop = chatBox.scrollHeight; // Auto scroll to the bottom
        chatInput.value = ""; // Clear input
    } else {
        alert("Please enter a message.");
    }
}


        // Toggle notification dropdown
        function toggleNotificationDropdown() {
            var dropdown = document.getElementById("notificationDropdown");
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }

        // Additional JavaScript for popups and interactivity can be added here
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('conflictTrendChart').getContext('2d');
    var conflictTrendChart = new Chart(ctx, {
        type: 'line', // Line chart for trends
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Example months
            datasets: [
                {
                    label: 'HR Department',
                    data: [3, 2, 1, 4, 3, 5], // Example conflict data
                    borderColor: '#FF6384',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'Sales Department',
                    data: [2, 3, 4, 2, 5, 6], // Example conflict data
                    borderColor: '#36A2EB',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    fill: true,
                    tension: 0.4
                },
                {
                    label: 'IT Department',
                    data: [1, 4, 2, 5, 3, 2], // Example conflict data
                    borderColor: '#FFCE56',
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    fill: true,
                    tension: 0.4
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Conflicts'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Months'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                tooltip: {
                    enabled: true
                }
            }
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('departmentPerformanceChart').getContext('2d');
    var departmentPerformanceChart = new Chart(ctx, {
        type: 'bar', // Bar chart for performance comparison
        data: {
            labels: ['HR', 'Sales', 'IT', 'Finance', 'Marketing'], // Example department names
            datasets: [
                {
                    label: 'Efficiency (%)',
                    data: [85, 78, 92, 88, 75], // Example performance data for efficiency
                    backgroundColor: '#4CAF50'
                },
                {
                    label: 'Productivity (%)',
                    data: [70, 82, 88, 90, 85], // Example performance data for productivity
                    backgroundColor: '#2196F3'
                },
                {
                    label: 'Targets Met (%)',
                    data: [95, 85, 80, 75, 88], // Example performance data for targets met
                    backgroundColor: '#FF9800'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Percentage (%)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Departments'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                },
                tooltip: {
                    enabled: true
                }
            }
        }
    });
</script>

</body>
   

</html>
