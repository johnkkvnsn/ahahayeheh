<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Math - EduPlatform</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <style>
        body {
            padding-top: 80px;
            background-color: #f8f9fa;
            font-size: 1.1rem;
            line-height: 1.6;
        }
        .topic-card {
            border-left: 5px solid #ffce32;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
        }
        .topic-btn {
            border-radius: 9999px;
            font-weight: bold;
        }
        .score {
            color: red;
            font-weight: bold;
        }
        .topic-content-icon {
            background: #e6f3fc;
            border-radius: 50%;
            padding: 10px;
            display: inline-block;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
        <a class="navbar-brand" href="dashboard.php">EduPlatform</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="dashboard.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.php">Contacts</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center mb-4">Math</h1>
        <div class="accordion" id="topicsAccordion">
            <!-- Lesson 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left font-weight-bold" type="button" 
                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Lesson 1: Numbers and Counting
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#topicsAccordion">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <div class="topic-content-icon mr-2">📄</div>
                            <a href="math-lesson1.php" class="text-primary font-weight-bold">Topic Content</a>
                        </div>
                        <div class="topic-card d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mb-3 mb-md-0">
                                <div class="score mt-1" id="lesson1-score">0/10 Score</div>
                            </div>
                            <a href="quiz.php?type=numbers_counting" class="btn btn-primary topic-btn">Start Quiz</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lesson 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left font-weight-bold" type="button" 
                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lesson 2: Basic Addition and Subtraction
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#topicsAccordion">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <div class="topic-content-icon mr-2">📄</div>
                            <a href="math-lesson2.php" class="text-primary font-weight-bold">Topic Content</a>
                        </div>
                        <div class="topic-card d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mb-3 mb-md-0">
                                <div class="score mt-1" id="lesson2-score">0/10 Score</div>
                            </div>
                            <a href="quiz.php?type=basic_addition_subtraction" class="btn btn-primary topic-btn">Start Quiz</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lesson 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left font-weight-bold" type="button" 
                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lesson 3: Multiplication and Division
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#topicsAccordion">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <div class="topic-content-icon mr-2">📄</div>
                            <a href="math-lesson3.php" class="text-primary font-weight-bold">Topic Content</a>
                        </div>
                        <div class="topic-card d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mb-3 mb-md-0">
                                <div class="score mt-1" id="lesson3-score">0/10 Score</div>
                            </div>
                            <a href="quiz.php?type=multiplication_division" class="btn btn-primary topic-btn">Start Quiz</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lesson 4 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left font-weight-bold" type="button" 
                            data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Lesson 4: Shapes and Patterns
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#topicsAccordion">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <div class="topic-content-icon mr-2">📄</div>
                            <a href="math-lesson4.php" class="text-primary font-weight-bold">Topic Content</a>
                        </div>
                        <div class="topic-card d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mb-3 mb-md-0">
                                <div class="score mt-1" id="lesson4-score">0/10 Score</div>
                            </div>
                            <a href="quiz.php?type=shapes_patterns" class="btn btn-primary topic-btn">Start Quiz</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lesson 5 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left font-weight-bold" type="button" 
                            data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Lesson 5: Fractions (basic)
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#topicsAccordion">
                    <div class="card-body bg-light">
                        <div class="d-flex align-items-center mb-3">
                            <div class="topic-content-icon mr-2">📄</div>
                            <a href="math-lesson5.php" class="text-primary font-weight-bold">Topic Content</a>
                        </div>
                        <div class="topic-card d-flex justify-content-between align-items-center flex-wrap">
                            <div class="mb-3 mb-md-0">
                                <div class="score mt-1" id="lesson5-score">0/10 Score</div>
                            </div>
                            <a href="quiz.php?type=fractions_basic" class="btn btn-primary topic-btn">Start Quiz</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Store completed quizzes
        let completedQuizzes = {};

        // Ensure only one accordion item open at a time
        $('#topicsAccordion').on('show.bs.collapse', function (e) {
            $('#topicsAccordion .collapse.show').collapse('hide');
        });

        // Function to determine score color
        function getScoreColor(score, total) {
            const percentage = (score / total) * 100;
            if (percentage >= 80) { // 8-10
                return 'text-success'; // green
            } else if (percentage >= 40) { // 4-7
                return 'text-primary'; // blue
            } else { // 1-3
                return 'text-danger'; // red
            }
        }

        // Function to update quiz button state
        function updateQuizButton(button, score, quizType) {
            if (score !== undefined && score !== null) {
                button.textContent = 'Completed';
                button.classList.remove('btn-primary');
                button.classList.add('btn-secondary');
                button.disabled = true;
                button.style.cursor = 'not-allowed';
                button.onclick = null; // Remove the onclick handler
                // Mark this quiz as completed
                completedQuizzes[quizType] = true;
            }
        }

        // Function to start quiz
        function startQuiz(type) {
            // Check if quiz is already completed
            if (completedQuizzes[type]) {
                alert('You have already completed this quiz!');
                return false;
            }
            window.location.href = `quiz.php?type=${type}`;
        }

        // Load scores from database and update UI
        document.addEventListener('DOMContentLoaded', function () {
            const quizTypes = {
                'lesson1-score': 'numbers_counting',
                'lesson2-score': 'basic_addition_subtraction',
                'lesson3-score': 'basic_multiplication_division',
                'lesson4-score': 'shapes_geometry',
                'lesson5-score': 'fractions_basic'
            };

            // Fetch scores from the database
            fetch('get_scores.php')
                .then(response => response.json())
                .then(scores => {
                    if (scores.error) {
                        console.error('Error:', scores.error);
                        return;
                    }

                    // Update each score display and quiz button
                    Object.entries(quizTypes).forEach(([elementId, quizType]) => {
                        const scoreEl = document.getElementById(elementId);
                        const quizButton = scoreEl.closest('.topic-card').querySelector('.topic-btn');
                        
                        if (scores[quizType]) {
                            const { score, total } = scores[quizType];
                            scoreEl.textContent = `${score}/${total} Score`;
                            // Remove any existing color classes
                            scoreEl.classList.remove('text-danger', 'text-primary', 'text-success');
                            // Add the appropriate color class
                            scoreEl.classList.add(getScoreColor(score, total));

                            // Update the quiz button state
                            if (quizButton) {
                                updateQuizButton(quizButton, score, quizType);
                            }
                        } else {
                            // If no score exists, show default state
                            scoreEl.textContent = '0/10 Score';
                            scoreEl.classList.remove('text-danger', 'text-primary', 'text-success');
                            scoreEl.classList.add('text-danger');
                            
                            if (quizButton) {
                                quizButton.textContent = 'Start Quiz';
                                quizButton.classList.remove('btn-secondary');
                                quizButton.classList.add('btn-primary');
                                quizButton.disabled = false;
                                quizButton.style.cursor = 'pointer';
                            }
                        }
                    });
                })
                .catch(error => console.error('Error fetching scores:', error));
        });
    </script>
</body>
</html>
