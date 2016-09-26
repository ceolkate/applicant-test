<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Directory home | International Center, University of Missouri';
    });

</script>


<h2>Introduction</h2>

<p>This is a directory of international students attending MU. Participation in this directory is voluntary and requires student consent. The directory can only be updated by International Center staff.<p>
<p>Printed copies of the directory are available in the International Center office</p>

<p><a href="#">Download a directory information and consent form (PDF)</a> [NB: No time to mock up a form]</p>

<h2>Development notes</h2>
<p>Assumptions: this is a voluntary directory for on-campus students to use for social networking (in person, that is). They are assumed to be living within commuting distance of the MU campus. Such a directory is probably available through student life, or could be pulled from the registrar data, but for this exercise, participation is completely voluntary and requires consent. </p>

<p> I would restrict access to this page by IP or pawprint authentication.  Search function would ideally search the entire International Center website, but I don't have access to the CSE code, so I plugged in the MU Extension search that I previously customized.
</p>
<p>I added table a table for the year in school, imported the full list of countries, added a row in the customer table for StatusID and did some basic data cleanup. I would also separate first name and last name into separate fields so they could be sorted alphabetically and by home country, but that would take longer than I have just now.</p>

<p>If this was a serious project, I would use Apache's rewrite_mod to rewrite the PHP URLs as pretty file names for the sake of SEO and because I hate query strings in URLs.</p>
<p>Things I didn't get to because it's 2 am: (1) adding radio buttons on add and edit forms for active/inactive, (2)changing state to either include the whole list, or not be a selection, but assume Missouri, since it's a local address (assumed to be on-campus students, not e-learning students)</p>

<p>This project was a nice refresher and a reminder why .NET was such a PITA to learn. PHP just makes more sense. I'm sure I didn't catch all the code problems, but hopefully most.</p>

<p>Kate Akers, akersk@missouri.edu</p>
<p>&nbsp;</p>
