<?php
require_once('.././conn/conn.php');
$school_id = $_GET['id'];
$change_id = $_GET['change_id'];
$sql = "select * from gk_schprosp WHERE id='$school_id'&&sp_proid ='$change_id'";
$result = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="../Css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" href="../Css/style.css"/>
    <script type="text/javascript" src="../Js/jquery.js"></script>
    <script type="text/javascript" src="../Js/jquery.sorted.js"></script>
    <script type="text/javascript" src="../Js/bootstrap.js"></script>
    <script type="text/javascript" src="../Js/ckform.js"></script>
    <script type="text/javascript" src="../Js/common.js"></script>

    <style type="text/css">
        body {
            padding-bottom: 40px;
        }

        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }

        table.last {
            width: 60%;
            margin: 20px auto;
        }
    </style>

</head>
<body>

<form action="./index.php?id=<?php echo $school_id?>&change_id=<?php echo $change_id ?>" method="post" name="school_add" >
    <table class="table table-bordered table-hover definewidth m10 last">
        <?php
        $row = mysqli_fetch_array($result);

        ?>
        <tr>
            <td width="10%" class="tableleft">学科类名称<span style="color:red;font-size: 16px;margin-right:0px;">&nbsp;&nbsp;*</span>
            </td>
            <td><input type="text" name="proname_i" value="<?php echo $row['proname'] ?>"/></td>
        </tr>


        <tr>
            <td class="tableleft"></td>
            <td>
                <button type="submit" class="btn btn-primary">保存</button>&nbsp;&nbsp;<button type="button"
                                                                                             class="btn btn-success"
                                                                                             name="backid" id="backid">
                    返回列表
                </button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<script>
    $(function () {
        $('#backid').click(function () {
            window.location.href = "index.php?id=<?php echo $school_id?>";
        });

    });
</script>