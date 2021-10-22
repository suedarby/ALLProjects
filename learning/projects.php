<?php include 'includes/header.php'; ?>
<section class="container-fluid">
    <!--Top Nav-->
    <?php include 'includes/topnav.php';?>
    <div class="row">
        <!--Side Nav-->
        <?php include 'includes/sidenav.php';?>
        <!--BODY OF PAGE-->

        <div class="col">
            <h1>Projects</h1>
            <!--DONE Section 1 App Tracker, Comp Tools & Cert Checklists-->
            <section class=" mb-3 pb-3">
                <div class="card-deck">
                    <!--App Tracker -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Application Trackers</h5>
                            <p class="card-text ">The Application Tracker was built in SharePoint as a stop gap,
                                band-aid approach to the need to track incoming Certification Applications. Since it
                                was my original idea I chose to use SharePoint for several reasons. </p>

                            <p>First was the need for more than one person to be in the system either entering,
                                editing or viewing data. Second the way the State had SharePoint setup it was auto
                                backed up and if something went wrong there were ways to recover data. </p>

                            <p>It was also as I learned over the couple years it was in use, expandable for data
                                collection. I could also develop reports and export the data for management to get
                                an idea of what was going on and who had what application at what phase in the
                                process. The downside was that the rest of the team was not as diligent in updating
                                as I was so data cleaning had to happen often. </p>

                            <p>Overall it was a more reliable tool than using Excel and was the only working
                                database the team had for a week during the new system changeover. Many of the data
                                points recorded in the Application Tracker were incorporated into the new system as
                                well.</p>
                            <p class="card-text text-center">
                                <a href="http://www.sue-a-darby.com/portfolio/sharepoint/"
                                    class="card-link btn btn-primary">
                                    SharePoint
                                    Application Tracker</a>
                            </p>
                        </div>
                    </div>
                    <!--Compliance Tools -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Compliance Tools</h5>
                            <p class="card-text ">The compliance tool is actually a series of tools built to support
                                the Provider Settings Compliance Project at the State of Alaska. </p>

                            <p>First was a spreadsheet template developed to capture the results of a survey, the
                                results of a in person visit to the site location and ultimately used to drive a
                                mail merge process for a series of compliance notifications. As the project moved
                                forward more things were added to track the incoming and out going data. </p>

                            <p>The mail merge process included conversion of Word documents to fill in PDFs which
                                resulted in another spreadsheet with a custom macro designed to email the PDF files
                                via Excel and Outlook.

                            <p>The last portion was a data tracking tool to help with reporting on the status of
                                compliance as the number of providers the team was tracking numbered over 800 and
                                kept climbing as discoveries happened.</p>

                            <p class="card-text text-center">
                                <a href="http://www.sue-a-darby.com/portfolio/compliance-checklist/"
                                    class="card-link btn btn-primary">Compliance Tools</a>
                            </p>
                            <p> As a side note the Settings Compliance Project was triggered by the Habilitation
                                Homes Project.</p>
                        </div>
                    </div>
                    <!--Cert Checklists -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Certification Checklists</h5>
                            <p class="card-text">The Certification Checklist is a tool that started as a humble Word
                                Document by a reviewer as a personal tool to aid in processing applications. During
                                a regulation change it became both a mandatory tool and a far more complex tool
                                built originally by another co-worker who moved on. </p>

                            <p>It was assigned to my care as it was my main tool for the intake process. Many times
                                I was asked to tweak language, update requirements and even program in new
                                requirements. As a result it became a 400 lines of VB.Net code juggernaut. </p>

                            <p>When I was in the process of leaving the State I asked the team for a wish list of
                                things they'd like me to try to build before I went. My last two days were spend
                                coding a much simpler variation of the checklist and training other team members on
                                how to modify the code. </p>

                            <p>The last I heard my training and documentation for how to do it was successful as the
                                tool had already started being updated less than a month after I was gone!</p>
                            <p class="card-text text-center">
                                <a href="http://www.sue-a-darby.com/portfolio/certification-checklist/"
                                    class="card-link btn btn-primary">Certification Checklist</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--DONE Section 2 Hab, CIR, Improve-->
            <section class=" mb-3 pb-3">
                <div class="card-deck">
                    <!-- Hab -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Habilitation Homes</h5>
                            <p class="card-text">The State has several types of providers who were previously
                                “invisible” to management statistically. We knew they exist but really did not know
                                exactly who they were or where the clients were. Frequently, the clients served were
                                placed in a wrong environment and all sorts of havoc would happen when something
                                went wrong. </p>

                            <p>This project copied some of the functionality of the current database known as DS3.
                                Using a parent/child relationship the agencies were matched with the homes that were
                                contracted with them which in turn allowed staff to see who was placed in which home
                                and contracted by what agency. </p>

                            <p>A mail out was required to gather all the data and then a massive data entry project
                                proceeded. Procedures and training was provided as the rest of the staff including
                                management needed to know how to connect homes with providers correctly.</p>

                            <p class="card-text text-center">
                                <a href="http://www.sue-a-darby.com/portfolio/habilitation-providers/"
                                    class="card-link btn btn-primary">Habilitation Project</a>
                            </p>
                        </div>
                    </div>
                    <!--CIR-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Critical Incident Reports</h5>
                            <p class="card-text">Critical Incident Reports or CIRs for short were a result of a
                                Federal level audit. At the start it was paper incident reports faxed, (later
                                securely e-mailed) to the division and I was the one who had to keep track of them.
                            </p>

                            <p>My system started out as a single sheet of paper which lasted about 7 reports the
                                first day. I moved quickly to a small spreadsheet and it was soon discovered that it
                                needed to be more robust. Once a month, so it didn't skew data collection, I was
                                asked for reports to be generated for management, senior management and the
                                commissioner, from my data. Only after the reports for the month were done was a
                                column or two or more added for the next month. Quarterly and yearly the reports
                                went to federal oversight. </p>

                            <p>Through this system reports flowed between Provider Certification, Quality Assurance
                                and Adult Protective Services. We knew where an incident was in the workflow thanks
                                to my system.</p>

                            <p>By the time the division had built a SharePoint, (based on my spreadsheet and
                                reports) I had logged over 3,500 reports of various incidents. Many of which were
                                minor, but several that saved the life of a vulnerable Alaskan.</p>

                            <p class="card-text text-center">
                                <a href="#" class="card-link btn btn-primary">Critical Incident Reports</a>
                            </p>
                        </div>
                    </div>
                    <!--Improve-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Process Improvements</h5>
                            <p class="card-text">My employer lost a big lawsuit in 2011 that could have easily been won.
                                The problem, they had no way to prove a document submitted was the original document and
                                what date it was submitted. Enter the date stamping machine and later on the electronic
                                date stamping in Adobe Pro Date Stamping Processes.
                            </p>
                            <p class="card-text text-center">
                                <a href="http://www.sue-a-darby.com/portfolio/process-improvements/"
                                    class="card-link btn btn-primary">Process
                                    Improvements</a>
                            </p>
                            <p class="card-text text-center">
                                <a href="http://www.sue-a-darby.com/portfolio/date-stamping-in-adobe/"
                                    class="card-link btn btn-primary">Date Stamping
                                    with Adobe</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--section 3 STC, AOS, Garden-->
            <section class=" mb-3 pb-3">
                <div class="card-deck">
                    <!-- STC-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sue's Tiny Costumes</h5>
                            <p class="card-text">Sue's Tiny Costumes is my oldest site. It started in the
                                days of GeoCities as did my skills with website building. I showcase my doll
                                patterns which are very tiny and complex in some ways yet ultimately beautiful. I
                                have used this site to learn how to setup a manual e-commerce shopping cart, learn
                                WordPress and even graphic design. There are 100 patterns and 2 books published and
                                available for sale on the site.
                            </p>
                            <p class="card-text text-center">
                                <a href="http://www.suestinycostumes.com" class="card-link btn btn-primary">Sue's
                                    Tiny Costumes</a>
                            </p>
                        </div>
                    </div>
                    <!--AOS-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Alaska OS</h5>
                            <p class="card-text">This site is undergoing metamorphasis. This site started out as
                                a
                                Virtual Assistant Company, morphed to a Wordpress site building company and is
                                now a
                                consulting company. It is also one of many sites I use to work on WordPress
                                skills.
                            </p>
                            <p class="card-text text-center">
                                <a href="http://www.alaskaos.com" class="card-link btn btn-primary">Alaska
                                    OS</a>
                            </p>
                        </div>
                    </div>
                    <!--Garden-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Garden</h5>
                            <p class="card-text">Some might think having a hobby up as a project should know
                                that
                                gardening takes planning and budgeting as well as a lot of work and dirt! This
                                year
                                I added a mini greenhouse and have a lot more potted plants than I've had in the
                                past.
                            </p>
                            <p class="card-text text-center">
                                <a href="http://www.work-samples.sue-a-darby.com"
                                    class="card-link btn btn-primary">Photography</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--section 4 Prom, CM, LCM-->
            <section class=" mb-3 pb-3">
                <div class="card-deck">
                    <!--Prom-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Senior Prom Dress</h5>
                            <p class="card-text">I understand most people would discount sewing as a hobby but
                                my
                                hobby happens to be designing, drafting (lots of math) and construction of
                                historic
                                garments. My daughter's Senior Prom Dress was no exception. Normally I do all
                                this
                                work for smaller models... 5 1/2" to 18" dolls but my daughter is one of my
                                original
                                dolls so making this dress was special and a lot of work!
                            </p>
                            <p class="card-text text-center">
                                <a href="http://www.work-samples.sue-a-darby.com"
                                    class="card-link btn btn-primary">Photography</a>
                            </p>
                        </div>
                    </div>
                    <!--CM-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Code Monkey</h5>
                            <p class="card-text">This site started as a joke and has morphed into a tutorials
                                site
                                which
                                shows off my skills in technical writing.</p>
                            <p class="card-text text-center">
                                <a href="http://www.codemonkey.sue-a-darby.com" class="card-link btn btn-primary">Code
                                    Monkey</a>
                            </p>
                        </div>
                    </div>
                    <!--LCM-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Lady Code Monkey</h5>
                            <p class="card-text">This was the start of my skill updating projects. The site is
                                built
                                in
                                HTML5 and CSS3 and is the playground for my JavaScript applications. I want to
                                do
                                many
                                things to the site just like I plan to do some things to this site.</p>
                            <p class="card-text text-center">
                                <a href="http://www.ladycodemonkey.sue-a-darby.com"
                                    class="card-link btn btn-primary">Lady Code
                                    Monkey</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--section 5 CPE, BMM, CI-->
            <section class=" mb-3 pb-3">
                <div class="card-deck">
                    <!--CPE-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Craft Pattern Emporium</h5>
                            <p class="card-text">Craft Pattern Emporium is one of my affiliate sites that I only
                                recently
                                launched. It shows off a variety of sewing and crafting tools. One of the sites
                                will
                                eventually become the home of my next book.</p>
                            </p>
                            <p class="card-text text-center"> <a href="http://www.craftpatternemporium.com"
                                    class="card-link btn btn-primary">Craft
                                    Pattern
                                    Emporium</a>
                            </p>
                        </div>
                    </div>
                    <!--BMM-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Books, Music &amp; More!</h5>
                            <p class="card-text">This site is dedicated to my love of geeky books, some music
                                and a
                                lot of
                                "more" items. It's primary focus is affiliate items but the overall theme has
                                settled
                                finally on various fandoms such as Harry Potter, Game of Thrones and Lord of the
                                Rings.</p>
                            <p class="card-text text-center">
                                <a href="http://www.books-music-more.com" class="card-link btn btn-primary">Books,
                                    Music
                                    &amp;
                                    More!</a>
                            </p>
                        </div>
                    </div>
                    <!--CI-->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Coffee Institute</h5>
                            <p class="card-text">I am a major coffee nut! This site showcases at least a little
                                bit
                                of that
                                love via affiliate items and sharing of things having to do with coffee and even
                                a
                                little
                                tea.</p>
                            <p class="card-text text-center"> <a href="http://www.coffee-institute.com"
                                    class="card-link btn btn-primary">Coffee
                                    Institute</a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include 'includes/footer.php';?>
</section>