<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <!-- External CSS -->
   
</head>
<body>

    <!-- Header -->
    @include('Components.header')

    <!-- Spinner -->
    @include('Components.spinner')

    <!-- Topbar -->
    @include('Components.topbar')

    <!-- Navbar & Hero -->
    @include('Components.navbar')

    <!-- Main Content -->
    <section class="about_section layout_padding">

<h1 class="labor" style="text-align: center;">LABOR STANDARD CHECKLIST</h1>
<p style="text-align: center;"><a
    href="http://alamid.dict.gov.ph/~s4govbwcdoleph/wp-content/uploads/2024/04/2023-11-30-Reprinted-2023-Handbook.pdf">Link
    to Handbook (PDF)</a></p>


<style type="text/css">
  .tg {
  border-collapse: collapse;
  border-color: #aabcfe;
  border-spacing: 0;
  width: 70%;
  margin-left: auto;
  margin-right: auto;
  margin-top:100px;
}
.labor{
margin-top:200px;
}

  .tg td {
    background-color: #e8edff;
    border-color: #aabcfe;
    border-style: solid;
    border-width: 1px;
    color: #669;
    font-family: Arial, sans-serif;
    font-size: 14px;
    overflow: hidden;
    padding: 10px 5px;
    word-break: normal;
  }

  .tg th {
    background-color: #b9c9fe;
    border-color: #aabcfe;
    border-style: solid;
    border-width: 1px;
    color: #039;
    font-family: Arial, sans-serif;
    font-size: 14px;
    font-weight: normal;
    overflow: hidden;
    padding: 10px 5px;
    word-break: normal;
  }

  .tg .tg-phtq {
    background-color: #D2E4FC;
    border-color: inherit;
    text-align: left;
    vertical-align: top
  }

  .tg .tg-hmp3 {
    background-color: #D2E4FC;
    text-align: left;
    vertical-align: top
  }

  .tg .tg-c3ow {
    border-color: inherit;
    text-align: center;
    vertical-align: top
  }

  .tg .tg-ydyv {
    background-color: #D2E4FC;
    border-color: inherit;
    text-align: center;
    vertical-align: middle
  }

  .tg .tg-dvpl {
    border-color: inherit;
    text-align: center;
    vertical-align: middle
  }

  .tg .tg-0pky {
    border-color: inherit;
    text-align: left;
    vertical-align: middle
  }

  .tg .tg-0lax {
    text-align: left;
    vertical-align: middle
  }
</style>
<table class="tg">
  <thead>
    <tr>
      <th class="tg-c3ow" colspan="5">Results</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="tg-phtq" rowspan="2">Application Labor Standards</td>
      <td class="tg-phtq" colspan="2">Retail &amp; Services</td>
      <td class="tg-phtq" rowspan="2">Non Agricultural/Agricultural</td>
      <td class="tg-hmp3" rowspan="2">Ref. (Page No.)</td>
    </tr>
    <tr>
      <td class="tg-dvpl">Employing 1 to 5 Workers</td>
      <td class="tg-dvpl">Employing 1 to 9 Workers</td>
    </tr>
    <tr>
      <td class="tg-phtq">1. Minimum Wage</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">2</td>
    </tr>
    <tr>
      <td class="tg-phtq">2. Holiday Pay</td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">14</td>
    </tr>
    <tr>
      <td class="tg-phtq">3. Premium Pay</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">18</td>
    </tr>
    <tr>
      <td class="tg-phtq">4. Overtime Pay</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">21</td>
    </tr>
    <tr>
      <td class="tg-phtq">5. Night Shift Differential</td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">23</td>
    </tr>
    <tr>
      <td class="tg-phtq">6. Service Charges</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">26</td>
    </tr>
    <tr>
      <td class="tg-phtq">7. Service Incentive Leave</td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">27</td>
    </tr>
    <tr>
      <td class="tg-phtq">8. Maternity Leave</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">29</td>
    </tr>
    <tr>
      <td class="tg-phtq">9. Paternity Leave</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">31</td>
    </tr>
    <tr>
      <td class="tg-phtq">10. Parental Leave</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">33</td>
    </tr>
    <tr>
      <td class="tg-phtq">11. Leave for VAWC</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">36</td>
    </tr>
    <tr>
      <td class="tg-phtq">12. Special Leave for Women</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">38</td>
    </tr>
    <tr>
      <td class="tg-phtq">13. 13th Month Pay</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">40</td>
    </tr>
    <tr>
      <td class="tg-phtq">14. Separation Pay</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">45</td>
    </tr>
    <tr>
      <td class="tg-phtq">15. Retirement Pay</td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>N/A</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">48</td>
    </tr>
    <tr>
      <td class="tg-phtq">16. ECC Benefits</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">52</td>
    </tr>
    <tr>
      <td class="tg-phtq">17. PhilHealth Benefits</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">57</td>
    </tr>
    <tr>
      <td class="tg-phtq">18. SSS Benefits </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">59</td>
    </tr>
    <tr>
      <td class="tg-phtq">19. Pag-IBIG Benefits</td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-ydyv">
        <center>✔</center>
      </td>
      <td class="tg-hmp3">61</td>
    </tr>
</table>
<h4 style="margin-left: 266px;"><i>Courtesy of DOLE</i></h4>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.apply-btn').forEach(button => {
      button.addEventListener('click', function () {
        const row = this.closest('tr');
        const category = row.getAttribute('data-category');
        const job = row.getAttribute('data-job');

        document.getElementById('job-category').value = category;
        document.getElementById('job-name').value = job;
      });
    });
  });
</script>

<style>
  .job-table {
    width: 100%;
    border-collapse: collapse;
  }

  .job-table th,
  .job-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }

  .job-table th {
    background-color: #f2f2f2;
  }

  .btn-accept {
    background-color: #4CAF50;
    /* Green */
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
  }

  .modal-dialog-centered {
    display: flex;
    align-items: center;
    min-height: calc(100% - 1rem);
  }

  .modal-dialog-centered .modal-content {
    margin: auto;
  }
</style>


    <!-- Footer -->
    @include('Components.footer')

    <!-- Copyright -->
   
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

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
