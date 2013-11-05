<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Clima Tempo Codeignter</title>

	<style type="text/css">
    
        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        /* Estilo para o selo do clima*/
        div.tempo div.cidade { 
            font-size: 10px;
            width: 300px;
        }
        
        div.tempo object {
            float: left;
            margin-right: 10px;
        }
         
        div.tempo div.data {
            font-size: 12px;
            width: 75px;
            float: left;
        }
         
        div.tempo div.temperatura {
            font-size: 12px
        }
         
        div.tempo div.frase {
            font-size: 12px;
        } 
	</style>
</head>
<body>
    <?php echo $selo; ?>
</body>
</html>
