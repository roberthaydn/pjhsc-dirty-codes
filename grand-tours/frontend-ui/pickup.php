<?php 
class Pickup {

    public static function Create() { return new Pickup; }   
    private function __clone() {}
    private function __construct() {}

    public function catbaloganToTacloban() {
    ?>
        <div class="col-12 col-sm-6 col-md-6">
            <div class="seat">
                <div class="row">
                    <div class="col-12">
                        <label class="check-label"><strong>Pick-up</strong></label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">                                   
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="jian"/>
                            <div class="state p-success-o">
                                <label class="check-label">Jian</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="jiabong"/>
                            <div class="state p-success-o">
                                <label class="check-label">Jiabong</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="motiong"/>
                            <div class="state p-success-o">
                                <label class="check-label">Motiong</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="paranas"/>
                            <div class="state p-success-o">
                                <label class="check-label">Paranas</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="hinabangan"/>
                            <div class="state p-success-o">
                                <label class="check-label">Hinabangan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="san sebastian"/>
                            <div class="state p-success-o">
                                <label class="check-label">San Sebastian</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="calbiga"/>
                            <div class="state p-success-o">
                                <label class="check-label">Calbiga</label>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <div class="seat">
               <div class="row">
                    <div class="col-12">
                        <div class="pretty p-default p-thick p-pulse">
                                <input type="radio" name="destination" class="radio-specific-location" value=""/>
                                <div class="state p-success-o">
                                    <label class="check-label">Specific Location</label>
                                </div>
                            </div>
                        <div class="md-form">
                            <input type="text" name="destination" class="specific-location" class="form-control validate" placeholder="Type your location here..." maxlength="25" disabled required>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    <?php
    }

    public function catbaloganToCalbayog() {
    ?>
        <div class="col-12 col-sm-6 col-md-6">
            <div class="seat">
                <div class="row">
                    <div class="col-12">
                        <label class="check-label"><strong>Pick-up</strong></label><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">                                   
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="gandara"/>
                            <div class="state p-success-o">
                                <label class="check-label">Gandara</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="san jorge"/>
                            <div class="state p-success-o">
                                <label class="check-label">San Jorge</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="tarangnan"/>
                            <div class="state p-success-o">
                                <label class="check-label">Tarangnan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="pretty p-default p-thick p-pulse">
                            <input type="radio" name="destination" class="pick-up" value="santa margarita"/>
                            <div class="state p-success-o">
                                <label class="check-label">Santa Margarita</label>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <div class="seat">
               <div class="row">
                    <div class="col-12">
                        <div class="pretty p-default p-thick p-pulse">
                                <input type="radio" name="destination" class="radio-specific-location" value=""/>
                                <div class="state p-success-o">
                                    <label class="check-label">Specific Location</label>
                                </div>
                            </div>
                        <div class="md-form">
                            <input type="text" name="destination" class="specific-location" class="form-control validate" placeholder="Type your location here..." maxlength="25" disabled required>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    <?php
    }
} 
?>
