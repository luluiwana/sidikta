


//chart js
var total_mission = document.getElementById("total_mission").value;
var completed_mission = document.getElementById("completed_mission").value;
var ongoing_mission = document.getElementById("ongoing_mission").value;
var data = {
    labels: ["Selesai", "Belum selesai"],
    datasets: [{
        data: [completed_mission, ongoing_mission],
        backgroundColor: ["#F9C51E", "white"],
        hoverBackgroundColor: ["#F9C51E", "white"],
    }, ],
};

var promisedDeliveryChart = new Chart(document.getElementById('myChart'), {
    type: 'doughnut',
    data: data,
    options: {
        responsive: true,
        cutoutPercentage: 70,
        legend: {
            display: false
        }
    }
});

Chart.pluginService.register({
    beforeDraw: function(chart) {
        var width = chart.chart.width,
            height = chart.chart.height,
            ctx = chart.chart.ctx;

        ctx.restore();
        var fontSize = (height / 114).toFixed(2);
        ctx.font = fontSize + "em sans-serif";
        ctx.textBaseline = "middle";
        ctx.fillStyle = "#fff";
        var percentage = Math.round(completed_mission/total_mission*100);
        if (isNaN(percentage)==true) {
            percentage=0;
        }
        var text = percentage+"%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;

        ctx.fillText(text, textX, textY);
        ctx.save();
    }
});