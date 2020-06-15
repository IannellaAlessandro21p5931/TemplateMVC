<form class="form" action="http://localhost/TemplateMVC/public/home/form_s" method="POST">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <div class="container">
        <div class="row" style="margin-top: 2%">
            <div class="col-xs-6" style="margin-top: 5%">
                
                <div style="padding: 20px;">
                    <select style="width: 35%" name="von">
                        <option selected disabled>Abreiseort</option>
                        <?php
                            $trainstations = $data['trainstations'];
                            foreach($trainstations as $key => $value):
                            echo '<option value="'.$key.'">'.$value.'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>

                <div style="padding: 20px;">
                    <select style="width: 35%" name="nach">
                        <option selected disabled>Ziel</option>
                        <?php
                            $trainstations = $data['trainstations'];
                            foreach($trainstations as $key => $value):
                            echo '<option value="'.$key.'">'.$value.'</option>';
                            endforeach;
                        ?>
                    </select>
                </div>

                <div style="padding: 20px; margin-top: 7%">
                    <input style="width: 35%" type="date" name="datum"></input>
                </div>

                <div style="padding: 20px;">
                    <input style="width: 35%" type="text" name="anz" placeholder="Anzahl Billets"></input>
                </div>

            </div>

            <div class="col-xs-6" style="margin-top: 5%;">
                <div style="padding: 10px;">
                    Halbtax
                    <p style="padding: 5px; margin-top: 5px;">
                    <input disabled type="radio" name="halbtax"> Ja</input>
                    </p>
                    <p style="padding: 5px;">
                    <input type="radio" name="halbtax" value="1" checked> Nein</input>
                    </p>
                </div>

                <div style="padding: 10px;">
                    Klasse
                    <p style="padding: 5px; margin-top: 5px;">
                    <input disabled type="radio" name="klasse"> 1. Klasse</input>
                    </p>
                    <p style="padding: 5px;">
                    <input type="radio" name="klasse" value="1" checked> 2. Klasse</input>
                    </p>
                </div>

                <div style="padding: 10px;">
                    Typ
                    <p style="padding: 5px;">
                    <input type="radio" name="typ" value="1" checked> Speziell</input>
                    </p>
                </div>
            </div>
        </div>
    </div>


    
    <div style="padding: 20px; margin-top: 5%">
        <button style="width: 100%; background-color: #0099ff" class="btn btn-primary" name="submit" value="submit" type="submit">Submit</button>
    </div>

</form>