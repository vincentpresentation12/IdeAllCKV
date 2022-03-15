function search_anim() {
    
    $ ( "#searchbox") .autocomplete ({
        source: document.getElementsByClassName('displayAnim')
      });
}