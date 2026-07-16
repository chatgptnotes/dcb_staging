@extends('layouts.dashboard-layout')

@section('title', 'events')

@section('content')

<style>
.fc-today-button{
    line-height: 12px !important;
}
.fc .fc-button .fc-icon{
        font-size: 16px !important;
}


@media screen and (max-width: 600px) {
    .fc-header-toolbar{
    display: flex;
    flex-direction: column;
}
}

.fc .fc-daygrid-day.fc-day-today {
    background-color: #F6C94D;
}
.fc .fc-button-primary {
    background-color: #f1935d;
    border-color: #000;
    color: #fff;
}
.fc .fc-button-primary:disabled {
    background-color: #f1935d;
    border-color: #000;
    color: #fff;
}
.fc .fc-button-primary:hover {
    background-color: #f1935d;
    border-color: #000;
    color: #fff;
}
</style>

<div>
        <!--<div class="mb-4">-->
        <!--    <h2 class="page-title">Profile</h2>-->
        <!--    <p class="page-description">Overview of profile details.</p>-->
        <!--</div>-->

        <!--<div>-->
        <!--    <div class="card" style="width: 18rem;">-->
        <!--        <img src="{{asset("assets/images/brain-cartoon.png")}}" class="card-img-top" alt="...">-->
        <!--        <div class="card-body">-->
        <!--          <h5 class="card-title">Card title</h5>-->
        <!--          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--          <a href="#" class="btn btn-primary">Go somewhere</a>-->
        <!--        </div>-->
        <!--      </div>-->
        <!--</div>-->

       
                <div class="row gx-3 gy-3">
                    <h3 class="section-title text-purple text-center text-lg-start px-0 ">Up & coming events
                    </h3>
                    <p class="section-description text-center text-lg-start px-0 mt-0">Let's check your event calendar</p>
                    <!--<div class="col-12 col-lg-8 pe-3">-->
                    <!--    {{-- <div id="calendarDiv"></div> --}}-->
                    <!--    <style>-->
                    <!--        table {-->
                    <!--            width: 100%;-->
                    <!--            border-collapse: collapse;-->
                    <!--        }-->
        
                    <!--        th,-->
                    <!--        td {-->
                    <!--            border: 1px solid #dddddd;-->
                    <!--            text-align: left;-->
                    <!--            padding: 3px;-->
                    <!--        }-->
        
                    <!--        th {-->
                    <!--            background-color: transparent;-->
                    <!--            text-align: center-->
                    <!--        }-->
        
                    <!--        .task-cell {-->
                    <!--            text-align: center;-->
                    <!--            background-color: #5a559d;-->
                    <!--            border: none;-->
                    <!--            color: #fff-->
                    <!--        }-->
        
                    <!--        .today {-->
                    <!--            background-color: #5a559d;-->
                    <!--            color: #fff-->
                    <!--        }-->
                    <!--        th{-->
                    <!--            color: #5a559d;-->
                    <!--            font-size: 14px;-->
                    <!--            border: none;-->
                    <!--        }-->
                    <!--        th span{-->
                    <!--            color: #3b3b3b;-->
                    <!--            font-size: 14px;-->
                    <!--        }-->
                    <!--        .selectedTimeOfDay{-->
                    <!--            background-color: #5a559d;-->
                    <!--            color: #fff;-->
                    <!--            border-radius: 100%;-->
                    <!--            padding: 5px;-->
                    <!--        }-->
                    <!--        td{-->
                    <!--            color: #3b3b3b;-->
                    <!--            font-size: 12px;-->
                    <!--        }-->
                    <!--    </style>-->
                    <!--    <table id="timetable">-->
                    <!--        <tr>-->
                    <!--            <th></th>-->
                    <!--            <th>Mon-->
                    <!--                <br>-->
                    <!--                <span class="selectedTimeOfDay">20</span>-->
                    <!--            </th>-->
                    <!--            <th>Tue-->
                    <!--                <br>-->
                    <!--                <span>21</span>-->
                    <!--            </th>-->
                    <!--            <th>Wed-->
                    <!--                <br>-->
                    <!--                <span>22</span>-->
                    <!--            </th>-->
                    <!--            <th>Thu-->
                    <!--                <br>-->
                    <!--                <span>23</span>-->
                    <!--            </th>-->
                    <!--            <th>Fri-->
                    <!--                <br>-->
                    <!--                <span>24</span>-->
                    <!--            </th>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>5:00 - 6:00</td>-->
                    <!--            <td id="monday_5"></td>-->
                    <!--            <td id="tuesday_5"></td>-->
                    <!--            <td id="wednesday_5"></td>-->
                    <!--            <td id="thursday_5"></td>-->
                    <!--            <td id="friday_5"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>6:00 - 7:00</td>-->
                    <!--            <td id="monday_6" class="task-cell"></td>-->
                    <!--            <td id="tuesday_6" ></td>-->
                    <!--            <td id="wednesday_6"></td>-->
                    <!--            <td id="thursday_6"></td>-->
                    <!--            <td id="friday_6"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>7:00 - 8:00</td>-->
                    <!--            <td id="monday_7" class="task-cell">Sample Text</td>-->
                    <!--            <td id="tuesday_7"></td>-->
                    <!--            <td id="wednesday_7 class="></td>-->
                    <!--            <td id="thursday_7"></td>-->
                    <!--            <td id="friday_7"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>8:00 - 9:00</td>-->
                    <!--            <td id="monday_8" class="task-cell"></td>-->
                    <!--            <td id="tuesday_8"></td>-->
                    <!--            <td id="wednesday_8"></td>-->
                    <!--            <td id="thursday_8"></td>-->
                    <!--            <td id="friday_8"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>9:00 - 10:00</td>-->
                    <!--            <td id="monday_9"></td>-->
                    <!--            <td id="tuesday_9"></td>-->
                    <!--            <td id="wednesday_9"class="task-cell">Sample Text</td>-->
                    <!--            <td id="thursday_9"></td>-->
                    <!--            <td id="friday_9"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>10:00 - 11:00</td>-->
                    <!--            <td id="monday_10"></td>-->
                    <!--            <td id="tuesday_10"></td>-->
                    <!--            <td id="wednesday_10"></td>-->
                    <!--            <td id="thursday_10"></td>-->
                    <!--            <td id="friday_10"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>11:00 - 12:00</td>-->
                    <!--            <td id="monday_11"></td>-->
                    <!--            <td id="tuesday_11"></td>-->
                    <!--            <td id="wednesday_11"></td>-->
                    <!--            <td id="thursday_11"></td>-->
                    <!--            <td id="friday_11"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>12:00 - 1:00</td>-->
                    <!--            <td id="monday_12"></td>-->
                    <!--            <td id="tuesday_12"></td>-->
                    <!--            <td id="wednesday_12"></td>-->
                    <!--            <td id="thursday_12"class="task-cell">Sample Text</td>-->
                    <!--            <td id="friday_12"></td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>1:00 - 2:00</td>-->
                    <!--            <td id="monday_1"></td>-->
                    <!--            <td id="tuesday_1"></td>-->
                    <!--            <td id="wednesday_1"></td>-->
                    <!--            <td id="thursday_1"class="task-cell"></td>-->
                    <!--            <td id="friday_1"></td>-->
                    <!--        </tr>-->
                            <!-- Add more rows as needed -->
                    <!--    </table>-->
                    <!--</div>-->
                    <!--<div class="col-12 col-lg-4 hideOnMobile d-flex flex-column justify-content-center align-items-center">-->
                    <!--    <div class="d-flex flex-row w-100 mb-3">-->
                    <!--        <div class="col-6">-->
                    <!--            <div id="month-year" class="monthYearTxt"></div>-->
                    <!--        </div>-->
                    <!--        <div class="col-6 d-flex flex--row justify-content-end">-->
                    <!--            <button onclick="previousMonth()" class="prevBtnCalander"><i class="bi bi-arrow-left"></i></button>-->
                    <!--            <button onclick="nextMonth()" class="nextBtnCalander"><i class="bi bi-arrow-right"></i></button>-->
                    <!--        </div>-->
                    <!--    </div>-->
        
                    <!--    <table id="calendar">-->
                    <!--        <thead>-->
                    <!--            <tr>-->
                    <!--                <th>S</th>-->
                    <!--                <th>M</th>-->
                    <!--                <th>T</th>-->
                    <!--                <th>W</th>-->
                    <!--                <th>T</th>-->
                    <!--                <th>F</th>-->
                    <!--                <th>S</th>-->
                    <!--            </tr>-->
                    <!--        </thead>-->
                    <!--        <tbody id="calendar-body">-->
                                <!-- Calendar days will be dynamically generated here -->
                    <!--        </tbody>-->
                    <!--    </table>-->
                    <!--</div>-->
                </div>
                
           
        <div id='events-calendar'></div>
    </div>
@endsection




<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script>
    $(document).ready(function() {
    $('#calendarDiv').fullCalendar({
    defaultView: 'month',
    events: [
      {
        title: 'sample text',
        start: '2024-02-01'

      },
      {
        title: 'sample text',
        start: '2024-02-25'
      },
      {
        title: 'sample text',
        start: '2024-02-28'
      }
      ]
    });
});


// Get current date
const currentDate = new Date();
let currentMonth = currentDate.getMonth();
let currentYear = currentDate.getFullYear();
let today = currentDate.getDate();

// Function to display the current month
function displayCurrentMonth() {
const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
document.getElementById('month-year').textContent = months[currentMonth] + ' ' + currentYear;

const firstDayOfMonth = new Date(currentYear, currentMonth, 1);
const lastDayOfMonth = new Date(currentYear, currentMonth + 1, 0);
const daysInMonth = lastDayOfMonth.getDate();

const calendarBody = document.getElementById('calendar-body');
calendarBody.innerHTML = '';

let date = 1;
for (let i = 0; i < 6; i++) {
    const row = document.createElement('tr');
    for (let j = 0; j < 7; j++) {
        const cell = document.createElement('td');
        if (i === 0 && j < firstDayOfMonth.getDay()) {
            row.appendChild(cell);
        } else if (date > daysInMonth) {
            break;
        } else {
            cell.textContent = date;
            row.appendChild(cell);
            if (date === today) {
                cell.classList.add('today'); // Add class for today's date
            }
            date++;
        }
    }
    calendarBody.appendChild(row);
}
}

// Function to navigate to the previous month
function previousMonth() {
currentMonth--;
if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
}
displayCurrentMonth();
}

// Function to navigate to the next month
function nextMonth() {
currentMonth++;
if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
}
displayCurrentMonth();
}

// Display current month when the page loads
displayCurrentMonth();
</script>
@include('layouts.dashboard-footer')



<script>
    console.log(@json($events));
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('events-calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
            events: @json($events),
        });
        calendar.render();
    });
</script>



