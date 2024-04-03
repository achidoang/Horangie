document.addEventListener("DOMContentLoaded", function() {
    showValue('ceksun', 'Sunlight');
});

function showValue(id, title) {
    document.getElementById('ceksun').classList.add('d-none');
    document.getElementById('cekhindex').classList.add('d-none');
    document.getElementById('cekrain').classList.add('d-none');

    document.getElementById(id).classList.remove('d-none');
    document.getElementById('title').innerText = title;
}

// Grafik weekly
function createOrUpdateChart(labels, data) {
    var ctx = document.getElementById("chart-line").getContext("2d");

    var gradientStroke2 = ctx.createLinearGradient(0, 230, 0, 50);
    gradientStroke2.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke2.addColorStop(0, 'rgba(94, 114, 228, 0)');

    if(window.chart) {
        window.chart.destroy();
    }

    window.chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [{
                label: "",
                tension: 0.4,
                borderWidth: 3,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke2,
                fill: true,
                data: data,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,                    
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
}

function updateChart(selectedOption) {
    $.ajax({
        url: 'weekly.php',
        method: 'GET',
        data: { option: selectedOption },
        success: function(response) {
            var newData = response.data.map(parseFloat);
            var newLabels = response.labels;

            createOrUpdateChart(newLabels, newData);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

$(document).ready(function() {
    updateChart('Soil Moisture');
});

// Grafik daily
function createOrUpdateDailyChart(labels, data) {
    var ctx = document.getElementById("dailyChartCanvas").getContext("2d");

    var gradientStroke2 = ctx.createLinearGradient(0, 230, 0, 50);
    gradientStroke2.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke2.addColorStop(0, 'rgba(94, 114, 228, 0)');

    if(window.dailyChart) {
        window.dailyChart.destroy();
    }

    window.dailyChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: labels,
            datasets: [{
                label: "",
                tension: 0.4,
                borderWidth: 3,
                borderColor: "#5e72e4",
                backgroundColor: gradientStroke2,
                fill: true,
                data: data,
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,                    
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                    },
                    ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                            size: 11,
                            family: "Open Sans",
                            style: 'normal',
                            lineHeight: 2
                        },
                    }
                },
            },
        },
    });
}

function updateDailyChart(selectedOption) {
    $.ajax({
        url: 'daily.php',
        method: 'GET',
        data: { option: selectedOption },
        success: function(response) {
            var newData = response.data.map(parseFloat);
            var newLabels = response.labels;

            createOrUpdateDailyChart(newLabels, newData);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}

$(document).ready(function() {
    updateDailyChart('Soil Moisture');
});

