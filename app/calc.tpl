{extends file="../templates/main.tpl"}

{block name=content}
        <form action="{$app_url}/app/calc.php" method="post" class="pure-form pure-form-stacked">
            <fieldset>
                <label>Proszę podać kwotę kredytu:</label>
                <input type="text" name="credits" value={$credits}></input>
                <label>Prosze podać na ile lat:</label>
                <input type="text" name="years" value={$years}></input>
                <label>Proszę podać oprocentowanie kredytu (z '.' w przypadku oprocentowania po przecinku, np. (8.5)):</label>
                <input type="text" name="percent" value={$percentage}></input>
                <input type="submit" value="Oblicz!" class="pure-button pure-button-primary"></input>
            </fieldset>
        </form>
{if isset($messages)}
    {foreach $messages as $mess }
        {strip}
        <h3 style="color:red;">{$mess}</h3>
        {/strip}
        {/foreach}
{/if}
{if isset($rata) }
    <h3>Twoja miesięczna rata wynosi: {$rata}</h3>
    <h3>Całkowity koszt kredytu wynosi: {$cost}</h3>
{/if}

{/block}