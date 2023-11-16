<?php
require_once('process/payroll_report_process.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payroll Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/navbarforemploy.css">
</head>

<body>
    <div class="d-flex">
        <div class="vh-100 sticky-top bg-danger" style="width: 280px;">
            <h1 class="text-white fs-5 text-center my-5">Yves's Enterprise</h1>
            <nav class="NAVBAR">
                <ul class="nav flex-column mb-auto">
                    <li><a href="admin_page.php">Home</a></li>
                    <li><a href="employee_registation_save.php">Employee Registration</a></li>
                    <li><a href="emp_rep.php">Employee Report</a></li>
                    <li><a href="payroll.php">Payroll</a></li>
                    <li><a href="payroll_rep.php">Payroll Report</a></li>
                    <li><a href="STORE/PANTS.PHP">POS</a></li>
                    <li><a href="pos_rep.php">POS Sales Report</a></li>
                    <li><a href="user_account.php">User Account</a></li>
                    <li><a href="login_form.php">Logout</a></li>
                </ul>
            </nav>
        </div>
        <!-- main content -->
        <div class=" flex-grow-1 bg-white">
            <div class="px-1 bg-white">
                <h1 class="d-flex justify-content-center m-2" style="font-size:30px;">Payroll Report</h1>
                <form action="" method="post" class="input-group mb-3 mt-3" style="height: 2rem; width:250px">
                    <input type="text" class="form-control" aria-describedby="button-addon2" placeholder="Search item name" name='search'>
                    <button class="btn btn-outline-secondary" type="submit" id="search_button"> <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 24 24" class="">
                            <path d="M 9 2 C 5.1458514 2 2 5.1458514 2 9 C 2 12.854149 5.1458514 16 9 16 C 10.747998 16 12.345009 15.348024 13.574219 14.28125 L 14 14.707031 L 14 16 L 20 22 L 22 20 L 16 14 L 14.707031 14 L 14.28125 13.574219 C 15.348024 12.345009 16 10.747998 16 9 C 16 5.1458514 12.854149 2 9 2 z M 9 4 C 11.773268 4 14 6.2267316 14 9 C 14 11.773268 11.773268 14 9 14 C 6.2267316 14 4 11.773268 4 9 C 4 6.2267316 6.2267316 4 9 4 z"></path>
                        </svg></button>
                </form>
                <div class="table-responsive">
                        <table class="table table-borderless rounded small table-hover">
                            <thead class="border">
                                <tr class="">
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Employee Number</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Name</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Basic Income</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Honorarium Income</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Other Income</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Gross Income</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Total Deduction</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Net Income</span></th>
                                    <th class="py-6 ps-6 border bg-danger"><span class="btn p-0 d-flex align-items-center fw-bold pe-none text-white">Paydate</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result) {
                                    while ($item = $result->fetch_assoc()) {
                                        echo "
                                        <tr class='clickable-row border' style='cursor: pointer' data-href='payroll.php?id={$item['employee_no']}'>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[employee_no]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[fname] $item[mname] $item[lname]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[basic_income]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[hono_income]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[other_income]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[gross_income]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[total_deduction]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[net_income]</td>
                                    <td class='py-6 ps-6 border' style='border-color: black !important;'>$item[income_date]</td>
                                </tr>
                                ";
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </section>

            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function(){
        $(".clickable-row").click(function(){
            window.location = $(this).data("href")
        })
    })
</script>
</html>