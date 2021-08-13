<div class="container ">
    <div class="panel-group" id="faqAccordion">
        
    <?php foreach($queries as $query){ ?>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question<?php echo $query['id'] ?>">
                 <h4 class="panel-title">
                   <i class="fa fa-question-circle"></i> <a href="#" class="ing"><?php echo $query['question'] ?></a>
              </h4>

            </div>
            <div id="question<?php echo $query['id'] ?>" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                <h5><span class="label label-primary">Answer</span></h5>
                    
                    <p><?php 
                        if($query['answer']){
                        echo $query['answer'];
                        }
                        else{ ?>
                        <p class="text-muted">This Question has not been answered Yet!</p>
                       <?php }?></p>
                </div>
            </div>
        </div>
    <?php } ?>
        
    </div>
    <!--/panel-group-->
</div>