<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container{
            width: 100%;
        }
        main{
            margin-top: 50px;
            text-align: center;
        }
        table{
            margin: 0 auto;
            
        }
        th, td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <main>
            <img src="<?php echo $args['src']; ?>" alt="logo">
            <hr/>
            <table>
                <tr>
                    <th>UUID</th>
                    <th>NAME</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    <th>CARD TYPE</th>
                    <th>CARD NUMBER</th>
                </tr>
                <?php foreach($args['details'] as $details) : ?>
                <tr>
                    <td><?php echo $details->_uuid ?></td>
                    <td><?php echo $details->_name ?></td>
                    <td><?php echo $details->_address ?></td>
                    <td><?php echo $details->_email ?></td>
                    <td><?php echo $details->_card_type ?></td>
                    <td><?php echo $details->_card_number ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </main>
    </div>
</body>
</html>
