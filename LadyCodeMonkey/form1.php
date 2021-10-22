<!doctype html>
<!--NOTE TO SELF http://127.0.0.1:3000/-->
<html lang="en">
<!--INCLUDES ALL META TAGS AND OPENING HTML AND BODY TAGS-->
<?php include 'includes/header.php'; ?>
<?php include 'includes/nav2.php';?>

<!--MAIN PAGE CONTAINER-->
<div class="container-fluid" style="margin-top: 5px">
    <div class="row">
        <!--LEFT SIDEBAR NAVIGATION-->
        <?php include 'includes/left_side2.php';?>
        <!--MAIN PAGE CONTAINER-->
        <!-- This is the main content area-->
        <div class="col_8 column">
            <content>
                <p id="description" class="description text-center">
                    Interested in talking more? Please let me know!
                </p>
                <form id="survey-form">
                    <!--User Story #3: I can see a form with id="survey-form".-->
                    <div class="form-group">
                        <label id="name-label" for="name">Name</label>
                        <!--User Story #4: Inside the form element, I am required to enter my name in a field with id="name".-->
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name"
                            required="true" />
                    </div>
                    <!--User Story #5: Inside the form element, I am required to enter an email in a field with id="email".-->
                    <div class="form-group">
                        <label id="email-label" for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email"
                            required="true" />
                    </div>
                    <!--User Story #6: If I enter an email that is not formatted correctly, I will see an HTML5 validation error. 
User Story #7: Inside the form, I can enter a number in a field with id="number".
User Story #8: If I enter non-numbers in the number input, I will see an HTML5 validation error.
User Story #9: If I enter numbers outside the range of the number input, which are defined by the min and max attributes, I will see an HTML5 validation error.
User Story #10: For the name, email, and number input fields inside the form I can see corresponding labels that describe the purpose of each field with the following ids: id="name-label", id="email-label", and id="number-label".
User Story #11: For the name, email, and number input fields, I can see placeholder text that gives me a description or instructions for each field. -->
                    <div class="form-group">
                        <label id="number-label" for="number">How many of my projects have you seen online?
                            <span class="clue">(optional)</span>
                        </label>
                        <input type="number" name="age" id="number" min="0" max="99" class="form-control"
                            placeholder="Age" />
                    </div>
                    <!--User Story #12: Inside the form element, I can select an option from a dropdown that has a corresponding id="dropdown".-->
                    <div class="form-group">
                        <p>
                            Which option best describes your current role?
                        </p>
                        <select id="dropdown" name="role" class="form-control" required="">
                            <option disabled="" selected="" value="">Select current role</option>
                            <option value="recruiter">Recruiter</option>
                            <option value="friend">Friend</option>
                            <option value="hiringManager">Hiring Manager</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <!--User Story #13: Inside the form element, I can select a field from one or more groups of radio buttons. Each
		group should be grouped using the name attribute.-->
                    <div class="form-group">
                        <p>Would you recommend me to a friend or collegue?</p>
                        <label>
                            <input name="user-recommend" value="definitely" type="radio" class="input-radio radio"
                                checked="" />
                            Definitely</label>

                        <label>
                            <input name="user-recommend" value="maybe" type="radio" class="input-radio radio" />
                            Maybe
                        </label>

                        <label>
                            <input name="user-recommend" value="not-sure" type="radio" class="input-radio radio" />
                            Not sure
                        </label>
                    </div>
                    <!--User Story #14: Inside the form element, I can select several fields from a series of checkboxes, each of which must have a value attribute.-->
                    <div class="form-group">
                        <p>
                            What would you like to see improved?
                            <span class="clue">(Check all that apply)</span>
                        </p>
                        <label>
                            <input name="prefer" value="front-end-projects" type="checkbox"
                                class="input-checkbox checkbox" />
                            Front-end Projects
                        </label>

                        <label>
                            <input name="prefer" value="back-end-projects" type="checkbox"
                                class="input-checkbox checkbox" />
                            Back-end Projects
                        </label>

                        <label>
                            <input name="prefer" value="data-visualization" type="checkbox"
                                class="input-checkbox checkbox" />
                            Data Visualization
                        </label>

                        <label>
                            <input name="prefer" value="additional-courses" type="checkbox"
                                class="input-checkbox checkbox" />
                            Additional Courses
                        </label>
                    </div>
                    <!--User Story #15: Inside the form element, I am presented with a textarea at the end for additional comments.-->
                    <div class="form-group">
                        <p>Any comments or suggestions?</p>
                        <textarea id="comments" class="input-textarea" name="comment"
                            placeholder="Enter your comment here...">
            </textarea>
                    </div>
                    <!--User Story #16: Inside the form element, I am presented with a button with id="submit" to submit all my inputs.-->
                    <div class="form-group">
                        <button type="submit" id="submit" class="submit-button">
                            Submit
                        </button>
                    </div>
                </form>
            </content>
        </div>



        <!--END CONTAINER-->

        <!--FOOTER INCLUDING ALL CDN BASED JS AND ANALYTICS-->

    </div>
</div>
</div>
</div>
<?php include 'includes/footer.php';?>
</div>
</body>

</html>