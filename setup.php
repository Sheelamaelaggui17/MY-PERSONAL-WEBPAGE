<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Set Up</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
      integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
      integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
      crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
        font-size: .875rem;
      }

      .feather {
        width: 16px;
        height: 16px;
        vertical-align: text-bottom;
      }

      .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        padding: 48px 0 0;
        box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
      }

      @media (max-width: 767.98px) {
        .sidebar {
          top: 5rem;
        }
      }

      .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: .5rem;
        overflow-x: hidden;
        overflow-y: auto;
      }

      .sidebar .nav-link {
        font-weight: 500;
        color: #375737;
      }

      .sidebar .nav-link .feather {
        margin-right: 4px;
        color: #727272;
      }

      .sidebar .nav-link.active {
        color: #375737;
      }

      .sidebar .nav-link:hover .feather,
      .sidebar .nav-link.active .feather {
        color: inherit;
      }

      .sidebar-heading {
        font-size: .75rem;
        text-transform: uppercase;
      }

      .navbar-brand {
        padding-top: .75rem;
        padding-bottom: .75rem;
        font-size: 1rem;
        background-color: #375737; /* Change background color to green */
        box-shadow: inset -1px 0 0 #375737; /* Change box shadow color to green */
      }

      .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
      }

      .navbar .form-control {
        padding: .75rem 1rem;
        border-width: 0;
        border-radius: 0;
      }

      .form-control-dark {
        color: #fff;
        background-color: #375737;
        border-color: #375737;
      }

      .form-control-dark:focus {
        border-color: transparent;
        box-shadow: 0 0 0 3px #375737;
      }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">SET UP</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse"
          data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">

            </li>
          </ul>
        </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="setup.php">
                  <span data-feather="home"></span>
                  Course
                </a>
              </li>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Subject&Student info</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                  <span data-feather="plus-circle"></span>
                </a>
              </h6>
              <ul class="nav flex-column mb-2">
                <li class="nav-item">
                  <a class="nav-link" href="subject.php">
                    <span data-feather="file-text"></span>
                    Subject
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="student.php">
                    <span data-feather="file-text"></span>
                    Student
                  </a>
                </li>

              </ul>
            </div>
          </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2" style="color: #375737;">Course</h1>
        </div>

        <h2>Course Records</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Number</th>
                <th>Course code</th>
                <th>Course</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Simulate database data
                $courses = [
                    ['id' => 1, 'code' => '001', 'name' => 'BSIT'],
                    ['id' => 3, 'code' => '003', 'name' => 'BSCS'],
                    ['id' => 2, 'code' => '002', 'name' => 'BSCPE'],
                ];
                foreach ($courses as $course) {
                    echo "<tr>";
                    echo "<td>{$course['id']}</td>";
                    echo "<td>{$course['code']}</td>";
                    echo "<td>{$course['name']}</td>";
                    echo "<td><a href='save.php?id={$course['id']}&code={$course['code']}&name={$course['name']}' class='btn btn-primary btn-sm'>Edit</a></td>";
                    echo "<td><button class='btn btn-danger btn-sm delete-btn' data-id='{$course['id']}'>Delete</button></td>";
                    echo "</tr>";
                }
              ?>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.delete-btn').on('click', function () {
        var id = $(this).data('id');
        if (confirm('Are you sure you want to delete this record?')) {
          $(this).closest('tr').remove();
          alert('Record deleted for ID ' + id);
        }
      });
    });
  </script>
</body>

</html>
