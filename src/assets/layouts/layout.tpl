<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    {foreach from=$stylesheets item=style}
        <link rel="stylesheet" href=assets/css/{$style}>
    {/foreach}
    <title>Pikouz</title>
</head>
<body>
    <div id="titleBar" class="grid_wrapper">
        <div class="siteTitle">Pikouz</div>
        <h1>{block name=title}Titre par defaut{/block}</h1>
        <nav>
            <ul>
                <a href="index.php"><li {if isset($currentPage) && $currentPage == "accueil"}class="currentPage"{/if}>Accueil</li></a>
                {if $loggedIn}
                    <a href="search.php"><li {if isset($currentPage) && $currentPage == "recherche"}class="currentPage"{/if}>Recherche</li></a>
                {/if}
                <a href="information.php"><li {if isset($currentPage) && $currentPage == "informations"}class="currentPage"{/if}>Informations</li></a>
                <a href="diseases.php"><li {if isset($currentPage) && $currentPage == "pathologies"}class="currentPage"{/if}>Pathologies</li></a>
            </ul>
        </nav>
    </div>
    <div class="grid_wrapper" id="content_grid">
        <div class="grid_one"></div>
        <div class="grid_two">
            {block name=content}Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae molestie libero, id pretium velit. Duis malesuada elit libero, ac pellentesque est eleifend ac. Nulla facilisi. Duis ultrices est ut neque vehicula, id molestie eros faucibus. Cras ut elit sit amet odio vulputate euismod. Proin ac turpis augue. Donec consequat metus id consectetur vestibulum. Vestibulum vitae dignissim nulla. Nunc ante dui, fringilla vel urna a, condimentum rutrum velit. Integer laoreet tellus at libero condimentum dignissim. Etiam laoreet, est eu fringilla lobortis, urna diam interdum elit, vitae laoreet lorem turpis eu leo.

            Integer et eleifend odio, id feugiat ligula. Etiam iaculis gravida nibh. Nulla finibus eleifend enim quis efficitur. In in magna vitae nunc ornare ultrices sit amet vitae nisi. Morbi vitae diam egestas, sodales magna non, dictum dolor. Proin quis consequat leo, eu finibus metus. Quisque facilisis, dolor eget tristique mollis, orci massa tristique risus, et malesuada ex neque ut ante. Donec aliquam malesuada pulvinar. Aenean pulvinar mi lacus, vitae convallis velit porttitor sollicitudin. Nullam mauris leo, consequat volutpat efficitur at, rutrum sed ex. In hac habitasse platea dictumst. Morbi sed molestie eros, ut finibus odio. Etiam ipsum nunc, sollicitudin non tincidunt eget, posuere sed libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed eu velit eros. Integer mollis laoreet purus vitae interdum.

            Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum non urna enim. Donec a lorem vehicula, accumsan ante quis, viverra lorem. Donec vel diam urna. Aliquam erat volutpat. In nec augue ut est sagittis accumsan id sed elit. Donec volutpat blandit nunc ac viverra. Integer id rutrum metus. Mauris bibendum eros eu convallis facilisis. Quisque bibendum a urna sit amet aliquam. Nunc vitae nulla tortor.

            Fusce tincidunt, sem id congue tempor, purus dolor convallis odio, nec pellentesque tellus mi elementum nisl. Proin finibus lectus et sodales lacinia. Maecenas tristique libero orci, sit amet tincidunt urna venenatis vitae. Aliquam erat volutpat. Praesent orci neque, aliquam ut arcu non, consectetur volutpat augue. Phasellus dapibus eleifend augue in feugiat. Vivamus ut mi eget erat feugiat varius. Integer a lacus sit amet mi volutpat volutpat. Fusce eu eros id augue luctus varius.

            Ut finibus fringilla velit, id feugiat tellus vestibulum ac. Sed quis interdum lectus, in imperdiet lorem. Aliquam ut vestibulum neque, eu feugiat massa. Ut consequat mattis eros, in tincidunt sem cursus eget. Ut bibendum quam non nunc mollis faucibus. In eget sem non odio ultricies dictum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut interdum, enim commodo malesuada dapibus, ligula dolor maximus nisl, id convallis elit mauris ac tellus.

            Fusce dictum tincidunt augue, finibus volutpat mauris fringilla eget. Fusce sed purus fringilla metus euismod consectetur. Vivamus mollis purus quis leo commodo, quis feugiat massa mollis. Maecenas ac orci ac leo fringilla vulputate quis vitae urna. Morbi ut eros rutrum, porta lorem at, consequat purus. Proin eget accumsan nulla. Aenean posuere nunc tellus, sit amet mattis erat facilisis ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras venenatis enim sed nibh tempor scelerisque. Etiam interdum ligula metus, ut consequat turpis dignissim quis. Fusce vel lorem at tortor volutpat sodales. Phasellus eget imperdiet leo. In hac habitasse platea dictumst. Mauris sed pharetra velit.

            Morbi venenatis lacinia sapien, et semper libero vehicula pretium. Praesent in dolor tincidunt, lacinia mauris nec, consequat nisl. Donec urna augue, dignissim at malesuada a, porta sed magna. Curabitur justo ligula, bibendum vel turpis eu, lobortis imperdiet ipsum. In quis nibh quis neque faucibus ultrices rhoncus non urna. Curabitur porta ipsum eget consequat pulvinar. Fusce mollis nibh mi, sit amet sagittis nunc tristique eu. Maecenas dapibus dapibus quam, porttitor efficitur dolor gravida sit amet. Donec auctor, nunc sit amet fermentum hendrerit, dolor urna elementum lectus, eu rhoncus diam lectus aliquet nulla. Donec eget dictum eros, et tincidunt dui.

            Donec rutrum augue a tincidunt vestibulum. Suspendisse potenti. Nunc sed vehicula libero. Fusce dapibus odio ac leo sagittis, quis tempus elit ornare. Suspendisse sed dui at enim suscipit posuere vel sit amet enim. Etiam dolor odio, egestas eget turpis eu, euismod interdum ipsum. Pellentesque lacinia ante tortor, in blandit dolor sollicitudin et. Morbi semper urna sed sapien semper, sed condimentum velit lacinia.

            Duis ultrices nisl et nulla vehicula, vitae ultrices ligula tincidunt. Etiam quis velit purus. Nullam auctor dignissim urna et bibendum. Vestibulum et feugiat libero, malesuada aliquam leo. Quisque molestie porta diam ac faucibus. Mauris ac felis eget diam egestas ultricies vitae at ante. Duis interdum purus eu sagittis tempus.

            Proin varius dictum massa, ut lobortis quam interdum sed. In quis sodales ante. Aliquam dapibus dolor quis commodo posuere. Cras a imperdiet magna. Nunc diam nisi, sodales vel congue non, lacinia sed sem. Etiam euismod tempus neque, vel feugiat ex posuere a. Morbi eu mauris dui. Donec vel faucibus nisl. Suspendisse potenti.{/block}
        </div>
        <div class="grid_three"></div>
    </div>
    <script>
        document.getElementById("content_grid").addEventListener('scroll',function(e)
        {
            if(this.scrollTop === 0)
            {
                document.getElementById("titleBar").classList.remove("bar_scrolled");
            }
            else
            {
                document.getElementById("titleBar").classList.add("bar_scrolled");
            }
        });
    </script>

</body>
</html>