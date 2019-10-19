<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
    <title>Export File CSV Dengan Helper CodeIgniter 3</title>
    <style>
        .tombol {
            background: #3498db;
            color: #fff;
            border: 0;
            padding: 5px 8px;
            margin: 20px 0px;
            text-decoration: none;
        }        

        table {
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
        }
        .custom-pagination{
            margin-top:20px;
        }
        .custom-pagination a{
            background:#444;
            color:#FFF;
            padding:10px;
            text-decoration: none;
        }
        .custom-pagination a:hover{
            background:#444;
            color:#FFF;
            padding:10px;
            text-decoration: none;
        }
        .custom-pagination strong{
            background:#DEDEDE;
            color:#444;
            padding:10px;
        }        
    </style>
</head>
<body>
    <h1><?php echo ucwords('Data Pegawai');?></h1>
    <a href="<?php echo base_url("pegawai/export_csv"); ?>" class="tombol">Export CSV</a><br><br>
    <?php if (!empty($sSQL)&&($num_results<>0)): ?>
        <table border="1">
            <tr>
                <th>NIP</th>
                <th>Nama Pegawai</th>
                <th>Alamat</th>
            </tr>
                <?php foreach($sSQL->result() as $row): ?>
                <tr>
                    <td><?php echo $row->nip;?></td>
                    <td><?php echo $row->nama_pegawai;?></td>
                    <td><?php echo $row->alamat;?></td>
                </tr>
                <?php endforeach ?>
        </table>
    <?php else: ?>
        <h3>No record found !</h3> 
    <?php endif ?>
    <?php if (!empty($sSQL)&&($num_results<>0)): ?>
        <?php 
            if (strlen($pagination)) {
                echo '<div class="custom-pagination">';
                echo $pagination;
                echo '</div><br />';
            }
        ?>
    <?php endif ?>
    <hr>
</body>
</html>