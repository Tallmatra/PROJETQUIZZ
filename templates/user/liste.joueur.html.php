<div id="container">
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
                  <div id="button">
                  <?php if ($page!=1) :?>
                    <button><a  class="a" href="http://localhost:8002/?controller=user&action=liste&page=<?=$page-1;?>"> << </a></button>
                    <?php endif ?>
                    <?php if ($page<$totalPages) :?>
                    <button id="button1"><a class="a" href="http://localhost:8002/?controller=user&action=liste&page=<?=$page+1;?>"> >> </a></button>
                    <?php endif ?>
                  </div>
</div>