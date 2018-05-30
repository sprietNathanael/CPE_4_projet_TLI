{extends file="assets/layouts/layout.tpl"}
{block name=title}Information{/block}
{block name=content}

<h2>
 <p>Developpements personnels</p>
 <ul>
  {foreach from=$listDevperso item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</h2>

<h2>
 <p>Source</p>
 <ul>
  {foreach from=$listSource item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</h2>

<h2>
 <p>Auteurs</p>
 <ul>
  {foreach from=$listAuthors item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</h2>


<h2>
 <p>Bibliographie</p>
 <ul>
  {foreach from=$listBibliographie item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</h2>


<h2>
 <p>Webographie</p>
 <ul>
  {foreach from=$listWebographie item=foo}
  <li>{$foo}</li>
  {/foreach}
 </ul>
</h2>

{/block}