<form class="form" action="TemplateMVC/public/home/form" method="POST">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <div style="padding: 20px;">
        <select name="Von" id="von">
            <?php
                $trainstations = $data['trainstations'];
                foreach($trainstations as $key => $value):
                echo '<option value="'.$key.'">'.$value.'</option>';
                endforeach;
            ?>
        </select>
    </div>

    <div style="padding: 20px;">
        <select name="Nach" id="nach">
            <?php
                $trainstations = $data['trainstations'];
                foreach($trainstations as $key => $value):
                echo '<option value="'.$key.'">'.$value.'</option>';
                endforeach;
            ?>
        </select>
    </div>

    <div style="padding: 20px;">
        <input type="date" id="datum" name="datum"></input>
    </div>
    
    <div style="padding: 20px;">
        <button type="submit">Submit</button>
    </div>



    <!-- 
        
    -->

</form>