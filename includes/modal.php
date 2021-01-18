<!-- Familjet pa te ardhura ose me te ardhura te pamjaftueshme -->
<div class="modal fade" id="Familjet">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                <div class="form-row">
                  <label class="bold control-label">Numri i fëmijëve</label>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="1femije" name="femije" value="1 femije" > 1 fëmijë
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="2femije" name="femije" value="2 femije" > 2 fëmijë
                    </div>
                  </div>
                    <div class=" form-group col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="3femije" name="femije" value="3 femije" > 3 fëmijë
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="mfemije" name="femije" value="me shume" > më shumë
                    </div>
                  </div>
                  </div>

                <div class="form-row">
                  <label class="bold control-label">A përfiton pagesë së aftesisë së kufizuar/pension invaliditeti ndonjë nga anëtarët e familjes?</label>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="po" name="pagese" placeholder="" value="po" required>Po
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="jo" name="pagese" placeholder="" value="jo"required>Jo
                    </div>
                  </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-4">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                    </div>
                  </div>
                  <div class="form-group col-md-5">
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                    </div>
                  </div>
                </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                      <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                        <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                            <input type="file" id="photo" name="photo">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-10">
                            <label for="photo" class="control-label">Certifikata e Pronësisë /Vërtetim Kadastre</label>
                              <input type="file" id="photo" name="vertetim">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-10">
                              <label for="photo" class="control-label">Certifikatë Familjare</label>
                                <input type="file" id="photo" name="fam">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-10">
                                <label for="photo" class=" control-label">Vërtetimin si punëkërkues i papunë, për jetimët mbi 18 vjeç</label>
                                  <input type="file" id="photo" name="papune">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-10">
                                  <label for="photo" class=" control-label">Kopjen e noterizuar të statusit të jetimit</label>
                                    <input type="file" id="photo" name="jetim">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-10">
                                    <label for="photo" class=" control-label">Vërtetimin e trajtimit në institucionet e përkujdesit shoqëror të lëshuar 30 ditët e fundit</label>
                                      <input type="file" id="photo" name="trajnim">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-10">
                                      <label for="photo" class="control-label">Urdhrin e mbrojtjes ose urdhrin e menjëhershëm të mbrojtjes</label>
                                        <input type="file" id="photo" name="mbrojtje">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group ">
                                    </div>
                                </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="formularAdd"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Jetimet -->
<div class="modal fade" id="Jetimet">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>

                  <div class="form-row">
                <div class="form-group col-md-12">
                  <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-4">
                <div class="custom-control custom-radio">
                  <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                </div>
                </div>
                <div class="form-group col-md-4">
                <div class="custom-control custom-radio">
                  <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                </div>
              </div>
              <div class="form-group col-md-3">
                <div class="custom-control custom-radio">
                  <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-10">
                    <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                      <input type="file" id="photo" name="photo">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-10">
                      <label for="photo" class=" control-label">Vërtetimin si punëkërkues i papunë, për jetimët mbi 18 vjeç</label>
                        <input type="file" id="photo" name="papune">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                        <label for="photo" class=" control-label">Kopjen e noterizuar të statusit të jetimit</label>
                          <input type="file" id="photo" name="jetim">
                    </div>
                  </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="jetimet"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Viktimat e trafikimit -->
<div class="modal fade" id="Viktimat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-12">
                <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                <div class="custom-control custom-radio">
                <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                </div>
                </div>
                <div class="form-group col-md-4">
                <div class="custom-control custom-radio">
                <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                </div>
                </div>
                <div class="form-group col-md-4">
                <div class="custom-control custom-radio">
                <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                </div>
                </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                    <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                      <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                        <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                          <input type="file" id="photo" name="photo">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class=" control-label">Vërtetimin e trajtimit në institucionet e përkujdesit shoqëror të lëshuar 30 ditët e fundit</label>
                            <input type="file" id="photo" name="trajnim">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="viktimat"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Familje me kryefamiljare gra -->
<div class="modal fade" id="Familje">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                <div class="form-row">
                  <label class="bold control-label">Numri i fëmijëve</label>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="1femije" name="femije" value="1 femije" > 1 fëmijë
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="2femije" name="femije" value="2 femije" > 2 fëmijë
                    </div>
                  </div>
                    <div class=" form-group col-md-6">
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="3femije" name="femije" value="3 femije" > 3 fëmijë
                    </div>
                    <div class="custom-control custom-radio">
                    <input type="radio"  id="mfemije" name="femije" value="me shume" > më shumë
                    </div>
                  </div>
                  </div>
                <div class="form-row">
                  <label class="bold control-label">A përfiton pagesë së aftesisë së kufizuar/pension invaliditeti ndonjë nga anëtarët e familjes?</label>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="po" name="pagese" placeholder="" value="po" required>Po
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="jo" name="pagese" placeholder="" value="jo"required>Jo
                    </div>
                  </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                    </div>
                    <div class="form-group col-md-6">
                      <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-4">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                    </div>
                  </div>
                  <div class="form-group col-md-3">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                    </div>
                  </div>
                  <div class="form-group col-md-5">
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                    </div>
                    <div class="custom-control custom-radio">
                      <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                    </div>
                  </div>
                </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                      <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                        <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                            <input type="file" id="photo" name="photo">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-10">
                            <label for="photo" class="control-label">Certifikata e Pronësisë /Vërtetim Kadastre</label>
                              <input type="file" id="photo" name="vertetim">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-10">
                              <label for="photo" class="control-label">Certifikatë Familjare</label>
                                <input type="file" id="photo" name="fam">
                          </div>
                        </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="familje"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Prinderit me me shume se dy femije -->
<div class="modal fade" id="Prinderit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                    <div class="form-row">
                      <label class="bold control-label">Numri i fëmijëve</label>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <div class="custom-control custom-radio">
                        <input type="radio"  id="1femije" name="femije" value="1 femije" > 1 fëmijë
                        </div>
                        <div class="custom-control custom-radio">
                        <input type="radio"  id="2femije" name="femije" value="2 femije" > 2 fëmijë
                        </div>
                      </div>
                        <div class=" form-group col-md-6">
                        <div class="custom-control custom-radio">
                        <input type="radio"  id="3femije" name="femije" value="3 femije" > 3 fëmijë
                        </div>
                        <div class="custom-control custom-radio">
                        <input type="radio"  id="mfemije" name="femije" value="me shume" > më shumë
                        </div>
                      </div>
                      </div>

                    <div class="form-row">
                      <label class="bold control-label">A përfiton pagesë së aftesisë së kufizuar/pension invaliditeti ndonjë nga anëtarët e familjes?</label>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12">
                        <div class="custom-control custom-radio">
                          <input type="radio"  id="po" name="pagese" placeholder="" value="po" required>Po
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"  id="jo" name="pagese" placeholder="" value="jo"required>Jo
                        </div>
                      </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                        </div>
                        <div class="form-group col-md-6">
                          <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                        </div>
                      </div>
                      <div class="form-row">
                      <div class="form-group col-md-4">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                        </div>
                      </div>
                      <div class="form-group col-md-3">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                        </div>
                      </div>
                      <div class="form-group col-md-5">
                        <div class="custom-control custom-radio">
                          <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                        </div>
                      </div>
                    </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                          <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                            <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-10">
                              <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                                <input type="file" id="photo" name="photo">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-10">
                                <label for="photo" class="control-label">Certifikata e Pronësisë /Vërtetim Kadastre</label>
                                  <input type="file" id="photo" name="vertetim">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-10">
                                  <label for="photo" class="control-label">Certifikatë Familjare</label>
                                    <input type="file" id="photo" name="fam">
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group ">
                                </div>
                            </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="prinderit"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Viktima te dhunes -->
<div class="modal fade" id="Viktima">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-4">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                    </div>
                    </div>
                    <div class="form-group col-md-4">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <div class="custom-control custom-radio">
                      <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                        <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                          <input type="file" id="photo" name="photo">
                    </div>
                  </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                        <label for="photo" class="control-label">Urdhrin e mbrojtjes ose urdhrin e menjëhershëm të mbrojtjes</label>
                          <input type="file" id="photo" name="mbrojtje">
                    </div>
                  </div>
                </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="viktima"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Personat me aftesi te kufizuar -->
<div class="modal fade" id="Personat">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <div class="custom-control custom-radio">
                    <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                  <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                    <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-10">
                      <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                        <input type="file" id="photo" name="photo">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                        <label for="photo" class="control-label"> Fletëdrejtimin për në KMCAP, kur personi komisionohet për herë të parë</label>
                          <input type="file" id="photo" name="fletdrejtim">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class="control-label">Certifikatë Familjare</label>
                            <input type="file" id="photo" name="fam">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-10">
                            <label for="photo" class="control-label"> Epikrizën përcjellëse, sa herë rikomisionohet</label>
                              <input type="file" id="photo" name="epikriza">
                        </div>
                      </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="personat"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Paraplegjiket -->
<div class="modal fade" id="Paraplegjiket">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <div class="custom-control custom-radio">
                    <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                  <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                    <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-10">
                      <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                        <input type="file" id="photo" name="photo">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                        <label for="photo" class="control-label"> Fletëdrejtimin për në KMCAP, kur personi komisionohet për herë të parë</label>
                          <input type="file" id="photo" name="fletdrejtimin">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class="control-label">Certifikatë Familjare</label>
                            <input type="file" id="photo" name="fam">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-10">
                            <label for="photo" class="control-label"> Epikrizën përcjellëse, sa herë rikomisionohet</label>
                              <input type="file" id="photo" name="epikriza">
                        </div>
                      </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="paraplegjiket"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Tetraplegjiket -->
<div class="modal fade" id="Tetraplegjiket">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                  </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-4">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                  </div>
                </div>
                <div class="form-group col-md-3">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                  </div>
                </div>
                <div class="form-group col-md-5">
                  <div class="custom-control custom-radio">
                    <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                  <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                </div>
                <div class="form-group col-md-6">
                    <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                    <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-10">
                      <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                        <input type="file" id="photo" name="photo">
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-10">
                  <label for="photo" class="control-label">Fletëdrejtimin për në KMCAP, kur personi komisionohet për herë të parë</label>
                          <input type="file" id="photo" name="fletdrejtimin">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class="control-label">Certifikatë Familjare</label>
                            <input type="file" id="photo" name="fam">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-10">
                            <label for="photo" class="control-label"> Epikrizën përcjellëse, sa herë rikomisionohet</label>
                              <input type="file" id="photo" name="epikriza">
                        </div>
                      </div>
                    <div class="form-row">
                      <div class="form-group ">
                        </div>
                    </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="tetraplegjiket"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- Invalidet e punes -->
<div class="modal fade" id="Invalidet">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Formular Aplikimi</b></h4>
              <?php
              $slug =  $_GET['category'];
              ?>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="formular_add.php?category=<?php echo $slug; ?>" enctype="multipart/form-data">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Emri </label>
                    <input type="text" class="form-control" id="emri" name="emri" placeholder="Emri" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Mbiemeri</label>
                      <input type="text" class="form-control" id="mbiemri" name="mbiemri" placeholder="Mbiemri" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Numri i Identifikimit</label>
                    <input type="text" class="form-control" id="nid" name="nid" placeholder="NID" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Emri i Babait</label>
                      <input type="text" class="form-control" id="bname" name="bname" placeholder="Emri_i_babait" required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="bold control-label">Ditëlindja</label>
                    <input type="date" class="form-control" id="bday" name="bday" placeholder="ditelindja" required>
                  </div>
                  <div class="form-group col-md-6">
                      <label class="bold control-label">Gjinia</label>
                      <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="m" name="test" value="mashkull" required>Mashkull
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="col-sm-1" type="radio"  id="f" name="test" value="femer" required>Femer
                    </div>
                  </div>
                </div>
                <div class="form-row">
              <div class="form-group col-md-6">
                    <label class="bold control-label">Adresa</label>
                    <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required>
                  </div>
                  <div class="form-group col-md-4">
                      <label class="bold control-label">Qyteti</label>
                      <input type="text" class="form-control" id="qyteti" name="qyteti" placeholder="Qyteti" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label class="bold control-label">Kodi Postar</label>
                      <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required>
                  </div>
                </div>
                    <div class="form-row">
                      <div class="form-group ">
                       </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label class="bold control-label"> Gjëndja e njësisë së banimit </label>
                      </div>
                      <div class="form-group col-md-6">
                        <label class="bold control-label"> A zotëron tokë familja juaj? </label>
                      </div>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="pershtatshme" name="njesi_banimi" value="E pershtatshme per jetese" >E përshtatshme për jetesë
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="papërshtatshme" name="njesi_banimi" value="E papershtatshme për jetese" >E papërshtatshme për jetesë
                      </div>
                    </div>
                    <div class="form-group col-md-3">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="rikonstruksion" name="njesi_banimi" value="Në rikonstruksion" >Në rikonstruksion
                      </div>
                    </div>
                    <div class="form-group col-md-5">
                      <div class="custom-control custom-radio">
                        <input type="radio"  id="tok" name="toke" placeholder="" value="po" required>Po
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio"  id="tk" name="toke" placeholder="" value="jo" required>Jo
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label class="bold control-label">Të ardhurat neto mujore në total të familjes(LEK)</label>
                      <input type="text" class="form-control" id="neto" name="neto" placeholder="TR" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="bold control-label">Shpenzimet totale mujore të familjes(LEK)</label>
                        <input type="text" class="form-control" id="shpenzime" name="shpenzime" placeholder="Shpenzime" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-10">
                          <label for="photo" class=" control-label">Fotokopje e kartës së identitetit</label>
                            <input type="file" id="photo" name="photo">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-10">
                            <label for="photo" class="control-label">Kërkesë   </label>
                              <input type="file" id="photo" name="kerkese">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-10">
                              <label for="photo" class="control-label">Certifikatë Familjare</label>
                                <input type="file" id="photo" name="fam">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-10">
                                <label for="photo" class="control-label"> Vërtetim tip</label>
                                  <input type="file" id="photo" name="tip">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group ">
                              </div>
                          </div>
                  </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Mbylle</button>
              <button type="submit" class="btn btn-success btn-flat" name="invalidet"><i class="fa fa-check-square-o"></i> Dergo</button>
              </form>
            </div>
        </div>
    </div>
</div>
