<div class="container-fluid">>
    <div class="card text-center">
        <div class="card-header">
            <a class="nav-link disabled" href="#">Disabled</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-responsive table-striped table-bordered text-center">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">n° adherent qui a saisi</th>
                        <th scope="col">date envoi féde.</th>
                        <th scope="col">n° license</th>
                        <th scope="col">édition carte.</th>
                        <th scope="col">n° adherent</th>
                        <th scope="col">nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">date naissance</th>
                        <th scope="col">genre</th>
                        <th scope="col">code postal</th>
                        <th scope="col">nom d'usage</th>
                        <th scope="col">code autorisation</th>
                        <th scope="col">numero origine</th>
                        <th scope="col">numero entité</th>
                        <th scope="col">vile naissance</th>
                        <th scope="col">departement naissance</th>
                        <th scope="col">telephone</th>
                        <th scope="col">email pro.</th>
                        <th scope="col">email ext.</th>
                        <th scope="col">numero parrain</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lesAdherents as $unAdherent):
                        echo '<tr>
                            <td>'.$unAdherent['NUMEROADHERENT_SAISIR'].'</td>                         
                            <td>'.$unAdherent['DATEENVOIFEDERATION'].'</td>
                            <td>'.$unAdherent['NUMEROLICENSE'].'</td>
                            <td>'.$unAdherent['DATEEDITIONCARTE'].'</td>
                            <td>'.anchor('responsable/afficherUnAdherent/'.$unAdherent['NUMEROADHERENT'],$unAdherent['NUMEROADHERENT']).'</td>
                            <td>'.$unAdherent['NOMADHERENT'].'</td>
                            <td>'.$unAdherent['PRENOMADHERENT'].'</td>
                            <td>'.$unAdherent['DATENAISSANCE'].'</td>
                            <td>'.$unAdherent['GENRE'].'</td>
                            <td>'.$unAdherent['CODEPOSTAL'].'</td>
                            <td>'.$unAdherent['NOMDUSAGE'].'</td>
                            <td>'.$unAdherent['CODEAUTORISATION'].'</td>
                            <td>'.$unAdherent['NUMEROORIGINE'].'</td>
                            <td>'.$unAdherent['NUMEROENTITE'].'</td>
                            <td>'.$unAdherent['VILLENAISSANCE'].'</td>
                            <td>'.$unAdherent['DEPARTEMENTNAISSANCE'].'</td>
                            <td>'.$unAdherent['TELEPHONE'].'</td>
                            <td>'.$unAdherent['EMAILPROFESSIONNEL'].'</td>
                            <td>'.$unAdherent['EMAILEXTERIEUR'].'</td>
                            <td>'.$unAdherent['NUMEROADHERENT_PARAINNER'].'</td>
                        </tr>';
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
</div><br>
      

