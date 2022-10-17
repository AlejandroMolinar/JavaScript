var band=true;	

$(document).ready(function() {

    $("#items").click(function () {

        if (band==true) {

            $("#items").animate({
                marginLeft: "-5px"
            }, 600);
            band=false;

        }else if(band==false){
            
            $("#items").animate({
                marginLeft: "-70px"
            }, 600);
            band=true;
        }

        const list= document.getElementById('items');
        const list2= document.getElementById('simulator');
            
        new Sortable (list, {
            group: {
                name: 'shared',
                pull: 'clone', // To clone: set pull to 'clone'
                put: false  // Do not allow items to be put into this list
            },
            animation: 150,
            put: false,  // To disable sorting: set sort to false
            
        });

        new Sortable (list2, {
            group: 'shared',
            animation: 150,
            direction: function(evt, target, dragEl) {
                if (target !== null && target.className.includes('half-column') && dragEl.className.includes('half-column')) {
                    return 'horizontal';
                }
                return 'vertical';
            }
 
        });

    });

    
});
