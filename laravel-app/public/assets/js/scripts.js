



function ConsultationButtonClicked(button) {
    button.classList.add('active');
}



// nav
document.getElementById('navbarToggleBtn').addEventListener('click', function() {
document.getElementById('drawer').classList.toggle('open');
});

document.getElementById('closeDrawerBtn').addEventListener('click', function() {
document.getElementById('drawer').classList.remove('open');
});




// Function to add event to a cell
// function addEvent(day, time, eventName) {
//     var cell = document.getElementById(day + '_' + time);
//     cell.innerHTML = eventName;
// }

// Example: Add events to the timetable
// addEvent('monday', '9', 'Math');
// addEvent('tuesday', '9', 'Science');
// addEvent('wednesday', '9', 'English');
// addEvent('thursday', '9', 'History');
// addEvent('friday', '9', 'Art');

// addEvent('monday', '10', 'History');
// addEvent('tuesday', '10', 'English');
// addEvent('wednesday', '10', 'Math');
// addEvent('thursday', '10', 'Science');
// addEvent('friday', '10', 'Physical Education');


 // Function to add event to a cell
 function addEvent(day, time, eventName, color) {
    var cell = document.getElementById(day + '_' + time);
    cell.innerHTML = eventName;
    cell.style.backgroundColor = color;
}

// Function to get the current date in yyyy-mm-dd format
function getCurrentDate() {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();
    return yyyy + '-' + mm + '-' + dd;
}

// Function to highlight today's column
function highlightToday() {
    var today = getCurrentDate();
    var dayColumns = document.querySelectorAll('th[id$="-date"]');
    dayColumns.forEach(function(column) {
        if (column.id === today + '-date') {
            column.classList.add('today');
        } else {
            column.classList.remove('today');
        }
    });
}

// Example: Add events to the timetable
addEvent('monday', '9', 'Math', 'lightgreen');
addEvent('tuesday', '9', 'Science', 'lightcoral');
addEvent('wednesday', '9', 'English', 'lightblue');
addEvent('thursday', '9', 'History', 'lightsalmon');
addEvent('friday', '9', 'Art', 'lightgoldenrodyellow');

addEvent('monday', '10', 'History', 'lightgoldenrodyellow');
addEvent('tuesday', '10', 'English', 'lightblue');
addEvent('wednesday', '10', 'Math', 'lightgreen');
addEvent('thursday', '10', 'Science', 'lightcoral');
addEvent('friday', '10', 'Physical Education', 'lightsalmon');

// Set current date in header and highlight today's column
document.getElementById('current-date').innerText = getCurrentDate();
highlightToday();
