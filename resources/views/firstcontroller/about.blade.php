@extends('layouts.template')

@section('content')

<div class="about-header" style="text-align: center">
    <h1>À propos de moi</h1>
</div>

<div class="container about-hero">
    <div class="row justify-content-md-center">
      <div class="col-md-auto">
        <img width="100%" src="/images/Nicolas_face.png" alt="">
      </div>
      <div class="col col-lg-2 ">
        <p class="align-middle">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque tempore laboriosam eligendi optio harum odit dolorem ea non quia ducimus, esse officiis explicabo facere assumenda molestias alias voluptatibus quos asperiores.</p>
      </div>
    </div>
</div>







<div class="chart-container in-middle" style="text-align: center; width:100%;">
    <div><canvas id="myChart"></canvas></div>
    
    <div class="chart-container-desc">
        <p>Depuis mon cursus en DUT MMI, j'ai appris à maitriser certains logiciels et Frameworks pour developper ma créativité. J'ai été amené à apprendre en autodidacte les logiciels de conception d'interface comme Adobe Xd que j'ai appris en premier, suivis de Sketch ainsi que Figma. De plus lors de ma formation, j'ai des bonnes bases dans la conceptions et le référencement de sites internets aussi bien en partie Front-End que Back-End.</p>
    </div>
</div>






<script>
    Chart.defaults.global.title.display = true;
    Chart.defaults.global.title.text = "Mes compétences";
    Chart.defaults.scale.ticks.beginAtZero = true;
</script>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Sketch', 'Figma', 'Adobe Xd', 'Adobe Illustrator','After Effect', 'Laravel', 'Bootstrap'],
        datasets: [{
            label: '% d\'aisance',
            data: [65, 60, 80, 80, 60, 30, 25],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 211, 18, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 211, 18, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        },
        {
            label: 'Années d\'expériences',
            data: [5, 6, 8, 8, 6, 3, 2],
            backgroundColor: [
                'rgba(144, 99, 132, 0.2)',
                'rgba(62, 162, 235, 0.2)',
                'rgba(160, 206, 86, 0.2)',
                'rgba(200, 192, 192, 0.2)',
                'rgba(45, 102, 255, 0.2)',
                'rgba(200, 211, 18, 0.2)',
                'rgba(200, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(144, 99, 132, 1)',
                'rgba(62, 162, 235, 1)',
                'rgba(160, 206, 86, 1)',
                'rgba(200, 192, 192, 1)',
                'rgba(45, 102, 255, 1)',
                'rgba(200, 211, 18, 1)',
                'rgba(200, 159, 64, 1)'
            ],
            borderWidth: 1
        }
    ] 

    },
    options: {
        layout: {
            responsive: true,
            maintainAspectRatio: false,
            padding: {
                left: 50,
                right: 50,
                top: 0,
                bottom: 0
            }
        }
    }
});
</script>


@endsection