{extends file="layout.tpl"}
{block name=title}Information{/block}
{block name=content}

<section>
 <p>Developpements personnels</p>
 <ul>
  {foreach from=$listDevperso item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</section>

<section>
 <p>Source</p>
 <ul>
  {foreach from=$listSource item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</section>

<section>
 <p>Auteurs</p>
 <ul>
  {foreach from=$listAuthors item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</section>


<section>
 <p>Bibliographie</p>
 <ul>
  {foreach from=$listBibliographie item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</section>


<section>
 <p>Webographie</p>
 <ul>
  {foreach from=$listWebographie item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</section>

{/block}