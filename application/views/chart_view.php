<?php if(! defined('BASEPATH')) exit('No direct script acess allowed');?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      <i class="fa fa-edit" style="color:green"> </i>  <?= $title_web;?>
    </h1>
    <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard');?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
            <li class="active"><i class="fa fa-file-text"></i>&nbsp; <?= $title_web;?></li>
    </ol>
  </section>
  <section class="content">
    <?php if(!empty($this->session->flashdata())){ echo $this->session->flashdata('pesan');}?>
    <?php
$this->db->select('buku_id,lama_pinjam');
$dataProdukChart = $this->db->get("tbl_pinjam")->result();
foreach ($dataProdukChart as $k => $v) {
    $arrProd[] = ['label' => $v->buku_id, 'y' => $v->lama_pinjam];
}
// print_r(json_encode($arrProd, JSON_NUMERIC_CHECK));die();
?>

<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light1", // "light2", "dark1", "dark2"
    animationEnabled: false, // change to true
    title:{
        text: "Data Durasi Buku Dipinjam"
    },
    data: [
    {
        // Change type to "bar", "area", "spline", "pie",etc.
        type: "column",
        /*dataPoints: [
            { label: "apple",  y: 10  },
            { label: "orange", y: 15  },
            { label: "banana", y: 25  },
            { label: "mango",  y: 30  },
            { label: "grape",  y: 28  }
        ]*/
        dataPoints:
            <?=json_encode($arrProd, JSON_NUMERIC_CHECK);?>

    }
    ]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>
</body>
</html>
    </div>
</section>
</div>
