<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 1200px;
            margin: auto;
        }
        .form-preview {
            width: 50%;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .form-preview h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        .form-preview .profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-preview .profile-section img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid #007bff;
            margin-right: 20px;
        }
        .form-preview .profile-section .name {
            flex: 1;
        }
        .form-preview .section {
            margin-bottom: 20px;
        }
        .form-preview .section h3 {
            margin-top: 0;
            font-size: 18px;
            color: #007bff;
        }
        .form-preview .section p {
            margin: 5px 0;
        }
        .form-main {
            width: 55%;
        }
        .progress-bar {
            margin-bottom: 20px;
            height: 5px;
            background: #ddd;
            border-radius: 5px;
            position: relative;
        }
        .progress-bar span {
            display: block;
            height: 100%;
            background: #007bff;
            width: 0;
            border-radius: 5px;
            transition: width 0.5s ease;
        }
        .form-navigation {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .form-navigation button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-navigation button:hover {
            background-color: #0056b3;
        }
        .form-navigation button:disabled {
            background-color: #ccc;
        }
        .form-step {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .form-step.active {
            display: block;
            opacity: 1;
        }
        .form-step h2 {
            margin-top: 0;
        }
        input[type="text"], input[type="email"], input[type="tel"], input[type="date"], input[type="file"], textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        textarea {
            height: 80px;
            resize: vertical;
        }
        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
            }
            .form-preview, .form-main {
                width: 100%;
            }
            .form-preview .profile-section {
                flex-direction: column;
                align-items: flex-start;
            }
            .form-preview .profile-section img {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }

        /* Divider style */
        .divider {
            margin: 20px 0;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('Components.header')

    <!-- Topbar -->
    @include('Components.topbar')

    <!-- Navbar & Hero -->
    @include('Components.navbar')

    <!-- Main Content -->
    <section class="about_section layout_padding">
        <div class="form-container">
            <div class="form-main">
                <div class="progress-bar">
                    <span id="progress-bar-fill"></span>
                </div>
                <form id="resume-form" action="{{ route('resumestore.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Step 1 -->
                    <div class="form-step active" id="step-1">
                        <h2>Step 1: Profile & Name</h2>
                        <label for="profile-pic">Profile Picture:</label>
                        <input type="file" id="profile-pic" name="profile_pic" accept="image/*" required><br>

                        <label for="first-name">First Name:</label>
                        <input type="text" id="first-name" name="first_name" required><br>
                        <label for="last-name">Last Name:</label>
                        <input type="text" id="last-name" name="last_name" required><br>

                        <label for="objectives">Career Objectives:</label>
                        <textarea id="objectives" name="objectives" required></textarea><br>

                        <div class="form-navigation">
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="form-step" id="step-2">
                        <h2>Step 2: Contact Information</h2>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required><br>
                        <label for="phone">Phone:</label>
                        <input type="tel" id="phone" name="phone" required><br>
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" required><br>
                        <div class="form-navigation">
                            <button type="button" onclick="prevStep()">Previous</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="form-step" id="step-3">
                        <h2>Step 3: Education</h2>
                        <label for="degree">Degree:</label>
                        <input type="text" id="degree" name="degree" required><br>
                        <label for="school">School/University:</label>
                        <input type="text" id="school" name="school" required><br>
                        <label for="graduation-date">Graduation Date:</label>
                        <input type="date" id="graduation-date" name="graduation-date" required><br>
                        <div class="form-navigation">
                            <button type="button" onclick="prevStep()">Previous</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="form-step" id="step-4">
                        <h2>Step 4: Experience</h2>
                        <label for="job-title">Job Title:</label>
                        <input type="text" id="job-title" name="job-title" required><br>
                        <label for="company">Company:</label>
                        <input type="text" id="company" name="company" required><br>
                        <label for="start-date">Start Date:</label>
                        <input type="date" id="start-date" name="start-date" required><br>
                        <label for="end-date">End Date:</label>
                        <input type="date" id="end-date" name="end-date"><br>
                        <div class="form-navigation">
                            <button type="button" onclick="prevStep()">Previous</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="form-step" id="step-5">
                        <h2>Step 5: Skills & Certifications</h2>
                        <label for="skills">Skills:</label>
                        <input type="text" id="skills" name="skills" required><br>
                        <label for="certifications">Certifications:</label>
                        <input type="text" id="certifications" name="certifications"><br>
                        <div class="form-navigation">
                            <button type="button" onclick="prevStep()">Previous</button>
                            <button type="button" onclick="nextStep()">Next</button>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="form-step" id="step-6">
                        <h2>Step 6: Review & Submit</h2>
                        <p>Please review your information before submitting.</p>
                        <div class="form-navigation">
                            <button type="button" onclick="prevStep()">Previous</button>
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="form-preview">
                <h2>Resume Preview</h2>
                <div class="profile-section">
                    <img id="preview-profile-pic-img" src="images/imgeprev.png" alt="Profile Picture Preview">
                    <div class="name">
                        <p><strong></strong> <span id="preview-first-name"></span> <span id="preview-last-name"></span></p>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="section">
                    <h3>Career Objectives</h3>
                    <p><span id="preview-objectives"></span></p>
                </div>
                <div class="divider"></div>
                <div class="section">
                    <h3>Contact Information</h3>
                    <p><strong></strong> <span id="preview-email"></span></p>
                    <p><strong></strong> <span id="preview-phone"></span></p>
                    <p><strong></strong> <span id="preview-address"></span></p>
                </div>
                <div class="divider"></div>
                
           
                <div class="section">
                    <h3>Education</h3>
                    <p><strong></strong> <span id="preview-degree"></span></p>
                    <p><strong></strong> <span id="preview-school"></span></p>
                    <p><strong></strong> <span id="preview-graduation-date"></span></p>
                </div>
                <div class="divider"></div>
                <div class="section">
                    <h3>Experience</h3>
                    <p><strong></strong> <span id="preview-job-title"></span></p>
                    <p><strong></strong> <span id="preview-company"></span></p>
                    <p><strong></strong> <span id="preview-start-date"></span></p>
                    <p><strong></strong> <span id="preview-end-date"></span></p>
                </div>
                <div class="divider"></div>
                <div class="section">
    <h3>Skills & Certifications</h3>
    <p><strong>Skills:</strong></p>
    <ul id="preview-skills">
        <!-- List items will be populated by JavaScript -->
    </ul>
    <p><strong>Certifications:</strong></p>
    <ul id="preview-certifications">
        <!-- List items will be populated by JavaScript -->
    </ul>
</div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('Components.footer')

    <!-- JavaScript -->
    <script>
        let currentStep = 1;
        const totalSteps = 6;

        function showStep(step) {
            document.querySelectorAll('.form-step').forEach((el) => el.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');
            updateProgressBar(step);
        }

        function updateProgressBar(step) {
            const progressBarFill = document.getElementById('progress-bar-fill');
            const percentage = ((step - 1) / (totalSteps - 1)) * 100;
            progressBarFill.style.width = `${percentage}%`;
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                currentStep++;
                showStep(currentStep);
                updatePreview();
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
                updatePreview();
            }
        }

        document.addEventListener('DOMContentLoaded', () => showStep(currentStep));

        // Image Preview Logic
        document.getElementById('profile-pic').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview-profile-pic-img');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = "images/imgeprev.png";
            }
        });

        function updatePreview() {
            document.getElementById('preview-first-name').textContent = document.getElementById('first-name').value;
            document.getElementById('preview-last-name').textContent = document.getElementById('last-name').value;
            document.getElementById('preview-email').textContent = document.getElementById('email').value;
            document.getElementById('preview-phone').textContent = document.getElementById('phone').value;
            document.getElementById('preview-address').textContent = document.getElementById('address').value;
            document.getElementById('preview-objectives').textContent = document.getElementById('objectives').value;
            document.getElementById('preview-degree').textContent = document.getElementById('degree').value;
            document.getElementById('preview-school').textContent = document.getElementById('school').value;
            document.getElementById('preview-graduation-date').textContent = document.getElementById('graduation-date').value;
            document.getElementById('preview-job-title').textContent = document.getElementById('job-title').value;
            document.getElementById('preview-company').textContent = document.getElementById('company').value;
            document.getElementById('preview-start-date').textContent = document.getElementById('start-date').value;
            document.getElementById('preview-end-date').textContent = document.getElementById('end-date').value;
            document.getElementById('preview-skills').textContent = document.getElementById('skills').value;
            document.getElementById('preview-certifications').textContent = document.getElementById('certifications').value;

            const profilePic = document.getElementById('profile-pic').files[0];
            if (profilePic) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview-profile-pic-img').src = e.target.result;
                }
                reader.readAsDataURL(profilePic);
            }
        }

        // Add event listeners to update preview on input change
        document.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('input', updatePreview);
        });
    </script>

    <!-- External JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
