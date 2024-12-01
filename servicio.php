<?php

class SistemaEcuaciones {
    private $a1, $b1, $c1;
    private $a2, $b2, $c2;

    public function __construct($a1, $b1, $c1, $a2, $b2, $c2) {
        $this->a1 = $a1;
        $this->b1 = $b1;
        $this->c1 = $c1;
        $this->a2 = $a2;
        $this->b2 = $b2;
        $this->c2 = $c2;
    }

    public function determinantes() {
        $D = $this->a1 * $this->b2 - $this->a2 * $this->b1;
        $Dx = $this->c1 * $this->b2 - $this->c2 * $this->b1;
        $Dy = $this->a1 * $this->c2 - $this->a2 * $this->c1;

        if ($D == 0) {
            return "El sistema no tiene solución única.";
        }

        $x = $Dx / $D;
        $y = $Dy / $D;
        return "x = $x, y = $y (método de determinantes)";
    }

    public function generarGrafico() {
        $chartData = [
            'type' => 'line',
            'data' => [
                'datasets' => [
                    [
                        'label' => 'Ecuación 1',
                        'data' => [
                            ['x' => 0, 'y' => ($this->c1 - $this->a1 * 0) / $this->b1],
                            ['x' => 10, 'y' => ($this->c1 - $this->a1 * 10) / $this->b1],
                        ],
                        'borderColor' => 'blue',
                        'fill' => false
                    ],
                    [
                        'label' => 'Ecuación 2',
                        'data' => [
                            ['x' => 0, 'y' => ($this->c2 - $this->a2 * 0) / $this->b2],
                            ['x' => 10, 'y' => ($this->c2 - $this->a2 * 10) / $this->b2],
                        ],
                        'borderColor' => 'red',
                        'fill' => false
                    ]
                ]
            ],
            'options' => [
                'scales' => [
                    'xAxes' => [['type' => 'linear', 'position' => 'bottom']],
                    'yAxes' => [['ticks' => ['beginAtZero' => true]]]
                ]
            ]
        ];

        $jsonChart = json_encode($chartData);

        $chartUrl = "https://quickchart.io/chart?c=" . urlencode($jsonChart);

        return $chartUrl;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a1 = floatval($_POST['a1']);
    $b1 = floatval($_POST['b1']);
    $c1 = floatval($_POST['c1']);
    $a2 = floatval($_POST['a2']);
    $b2 = floatval($_POST['b2']);
    $c2 = floatval($_POST['c2']);

    if (!is_numeric($a1) || !is_numeric($b1) || !is_numeric($c1) || !is_numeric($a2) || !is_numeric($b2) || !is_numeric($c2)) {
        die("Error: Todos los coeficientes y resultados deben ser números.");
    }

    $sistema = new SistemaEcuaciones($a1, $b1, $c1, $a2, $b2, $c2);
    $resultado = $sistema->determinantes();
    $chartUrl = $sistema->generarGrafico();

    echo "<div class='result'>";
    echo "<h2>Resultado:</h2>";
    echo "<p>$resultado</p>";
    echo "<img src='$chartUrl' alt='Gráfico de ecuaciones' />";
    echo "</div>";
}
?>
<style>
    .result {
        text-align: center;
        margin-top: 20px;
    }
    img {
        margin-top: 20px;
        max-width: 100%;
    }
</style>
