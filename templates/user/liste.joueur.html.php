
                  <div id="liste">
                    <h1>Liste des Joueurs</h1>
                      <table>
                        <tr>
                          <th>PRENOM</th>
                          <th>NOM</th>
                          <th>SCORE</th>
                        </tr>
                        <tr>
                          <?php foreach ($data as $value) :?>
                          <td><?=  $value['prenom'];?></td>
                          <td><?=  $value['nom'];?></td>
                          <td><?=  $value['score'];?></td>
                        </tr>
                        <?php endforeach ?>
                      </table>
                  </div>