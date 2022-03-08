
                  <div id="liste">
                    <h1>Liste des Joueurs</h1>
                      <table>
                        <tr>
                          <th>PRENOM</th>
                          <th>NOM</th>
                          <th>SCORE</th>
                        </tr>
                        <tr>
                          <?php foreach ($items as $value) :?>
                          <td><?=  $value['prenom'];?></td>
                          <td><?=  $value['nom'];?></td>
                          <td><?=  $value['score'];?></td>
                        </tr>
                        <?php endforeach ?>
                      </table>
                  </div>
                  <div>
                  <?php if ($page!=1) :?>
                    <button><a href="http://localhost:8002/?controller=user&action=liste&page=<?=$page-1;?>"> Precedent</a></button>
                    <?php endif ?>
                    <?php if ($page<$totalPages) :?>
                    <button><a href="http://localhost:8002/?controller=user&action=liste&page=<?=$page+1;?>"> Suivant</a></button>
                    <?php endif ?>
                  </div>