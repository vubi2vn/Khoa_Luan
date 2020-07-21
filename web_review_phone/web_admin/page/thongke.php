
<?php

?>
<div class="row" style="border-bottom:1px solid green;text-align:right">
    <div class="col-6" style="border-right:1px solid green">
    <div id="chart-container">
        <canvas id="graph"></canvas>
    </div>
    <a href="index.php?p=capnhat_baiviet" class="btn btn-success" style="margin:2px">Chi tiết </a>
    </div>
    <div class="col-6">
    <div id="chart-container">
        <canvas id="graph_report"></canvas>
    </div>
    <a href="index.php?p=ds_binhluan" class="btn btn-success" style="margin:2px">Chi tiết </a>
    </div>
</div>
<div class="row">
    <div class="col-6" style="border-right:1px solid green">
    <div id="chart-container">
        <canvas id="graph_comment"></canvas>
    </div>
    </div>
    <div class="col-6">
    <div id="chart-container">
        <canvas id="graph_like"></canvas>
    </div>
    </div>
</div>
<script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph(){
                $.post("statistics/statistics_news.php",
                function (data){
                    var labels = [];
                    var result = [];
                    data=JSON.parse(data);
                    for (var i in data) {
                        labels=['Chưa viết','Đã viết'];
                        result.push(data[i].size_news);
                    }
                    var pie = $("#graph");
                    var myChart = new Chart(pie, {
                        type: 'pie',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    borderColor: ["rgba(255, 255, 255,1)","rgba(240, 173, 78, 1)","rgba(92, 184, 92, 1)"],
                                    backgroundColor: ["rgba(217, 83, 79,0.2)","rgba(240, 173, 78, 0.2)","rgba(92, 184, 92, 0.2)"],
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Thống kê lượng điện thoại chưa viết bài"
                            }
                        }
                    });
                });
                $.post("statistics/statistics_report.php",
                function (data){
                    var labels = [];
                    var result = [];
                    data=JSON.parse(data);
                    for (var i in data) {
                        labels=['Chưa xử lý','Đã xử lý'];
                        result.push(data[i].size_report);
                    }
                    var pie = $("#graph_report");
                    var myChart = new Chart(pie, {
                        type: 'pie',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    data: result,
                                    borderColor: ["rgba(255, 255, 255,1)","rgba(0, 102, 0, 1)","rgba(92, 184, 92, 1)"],
                                    backgroundColor: ["rgba(102, 102, 255,0.2)","rgba(102, 255, 102, 0.2)","rgba(92, 184, 92, 0.2)"],
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Thống kê lượng report chưa xử lý"
                            }
                        }
                    });
                });
                $.post("statistics/statistics_comment.php",
                function (data){
                    var labels = [];
                    var pos = [];
                    var neg = [];
                    data=JSON.parse(data);
                    for (var i in data) {
                        var day=new Date(data[i].date);
                        labels.push(day.getDate().toString()+'/'+(day.getMonth()+1).toString());
                        pos.push(data[i].pos);
                        neg.push(data[i].neg);
                    }
                    var pie = $("#graph_comment");
                    var myChart = new Chart(pie, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    label:"Tích cực",
                                    data: pos,
                                    borderColor:"rgba(102, 102, 255,1)",
                                    backgroundColor:'rgba(255, 255, 255, 0.1)',
                                    
                                },
                                {
                                    label:"Tiêu cực",
                                    data: neg,
                                    borderColor:"rgba(102, 255, 102, 1)",
                                    backgroundColor:'rgba(255, 255, 255, 0.1)',
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Thống kê lượng bình luận trong 30 ngày"
                            },
                            stacked:false,
                        }
                    });
                });
                $.post("statistics/statistics_like.php",
                function (data){
                    var labels = [];
                    var value = [];
                    data=JSON.parse(data);
                    for (var i in data) {
                        var day=new Date(data[i].date);
                        labels.push(day.getDate().toString()+'/'+(day.getMonth()+1).toString());
                        value.push(data[i].value);
                        // console.log(data);
                    }
                    var pie = $("#graph_like");
                    var myChart = new Chart(pie, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [
                                {
                                    label:"Lượt like",
                                    data: value,
                                    borderColor:"rgba(102, 255, 102,1)",
                                    backgroundColor:'rgba(255, 255, 255, 0.1)',
                                    
                                }
                            ]
                        },
                        options: {
                            title: {
                                display: true,
                                text: "Thống kê lượng like trong 30 ngày"
                            },
                            stacked:false,
                        }
                    });
                });
        }

</script>