@extends('layouts.app')

@section('content')

<div class="row g-4">

    <!-- CARD 1 -->
    <div class="col-lg-3 col-md-6">

        <div class="card-box">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <p class="text-muted">
                        Students
                    </p>

                    <h2 class="fw-bold">
                        1,250
                    </h2>

                </div>

                <div class="icon-box bg-blue">
                    <i class="bi bi-people"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- CARD 2 -->
    <div class="col-lg-3 col-md-6">

        <div class="card-box">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <p class="text-muted">
                        Courses
                    </p>

                    <h2 class="fw-bold">
                        58
                    </h2>

                </div>

                <div class="icon-box bg-green">
                    <i class="bi bi-book"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- CARD 3 -->
    <div class="col-lg-3 col-md-6">

        <div class="card-box">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <p class="text-muted">
                        Revenue
                    </p>

                    <h2 class="fw-bold">
                        $12,500
                    </h2>

                </div>

                <div class="icon-box bg-orange">
                    <i class="bi bi-cash-stack"></i>
                </div>

            </div>

        </div>

    </div>

    <!-- CARD 4 -->
    <div class="col-lg-3 col-md-6">

        <div class="card-box">

            <div class="d-flex justify-content-between align-items-center">

                <div>

                    <p class="text-muted">
                        Instructor
                    </p>

                    <h2 class="fw-bold">
                        25
                    </h2>

                </div>

                <div class="icon-box bg-red">
                    <i class="bi bi-person-workspace"></i>
                </div>

            </div>

        </div>

    </div>

</div>

<!-- CHART -->
<div class="chart-box">

    <div class="d-flex justify-content-between mb-4">

        <h5 class="fw-bold">
            Analytics
        </h5>

        <button class="btn btn-primary rounded-4">
            Export
        </button>

    </div>

    <canvas id="myChart"></canvas>

</div>

<!-- TABLE -->
<div class="table-box">

    <h5 class="fw-bold mb-4">
        Latest Students
    </h5>

    <div class="table-responsive">

        <table class="table align-middle">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>John Doe</td>
                    <td>john@gmail.com</td>
                    <td>Laravel Mastery</td>
                    <td>
                        <span class="badge bg-success">
                            Active
                        </span>
                    </td>
                </tr>

                <tr>
                    <td>Sarah</td>
                    <td>sarah@gmail.com</td>
                    <td>UI UX Design</td>
                    <td>
                        <span class="badge bg-warning">
                            Pending
                        </span>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

<script>

const ctx = document.getElementById('myChart');

new Chart(ctx, {

    type: 'line',

    data: {

        labels: ['Jan','Feb','Mar','Apr','May','Jun'],

        datasets: [{

            label: 'Students',

            data: [120,190,300,500,200,450],

            borderWidth: 3,
            tension: 0.4,
            fill: true

        }]

    }

});

</script>

@endsection