<div class="block-1" id="home">
    <div class="container">
        <form id="sheet">
            <div class="row">
                <div class="col-sm-12">
                    <div class="calc-holder">
                        <div class="header-holder"><h1>Расчет оффера</h1></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="first-row-holder">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                        <tbody>
                                        <tr>
                                            <td width="70%"><strong>Количество рабочих дней</strong></td>
                                            <td width="20%"><input name="work-days" id="work-days" type="text" class="form-control input-check" value="20" data-cell="C2"></td>
                                            <td width="10%" class="text-center"></td>
                                        </tr>
                                        <tr>
                                            <td width="70%"><strong>Количество отправок в день</strong></td>
                                            <td width="20%"><input name="send-qnt" id="send-qnt" type="text" class="form-control input-check" value="20" data-cell="C3"></td>
                                            <td width="10%" class="text-center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2>Товар</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Цена закупки</td>
                                        <td width="20%"><input id="product-price" type="text" class="form-control input-check" value="220" data-cell="C6"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Цена продажи</td>
                                        <td><input type="text" id="product-sale" class="form-control input-check" value="600" data-cell="C7"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Прибыль с 1 единицы товара</td>
                                        <td><input id="product-profit" class="form-control input-check" data-cell="C8" data-formula="C7-C6" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Прибыль продаж с колич. оптравок</strong></td>
                                        <td><input type="text" class="form-control input-check" value="10" data-cell="C9" data-formula="C8*C3" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Апсел (Допродажи)</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Подтверждение допродажи %</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="100"  data-cell="C12"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Апсел%</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="25"  data-cell="C13"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td>Цена закупки апсела</td>
                                        <td><input type="text" class="form-control input-check"  value="112"  data-cell="C14"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Цена продажи апсела</td>
                                        <td><input type="text" class="form-control input-check"  value="332"  data-cell="C15"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Прибыль апсела</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C16" data-formula="(C15-C14)-(C15-C14)/100*(100-C12)" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Прибыль апсела с колич. отправок</strong></td>
                                        <td><input type="text" class="form-control input-check"  data-cell="C17" data-formula="(C3*C13/100)*C16" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Лид</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Стоимость лида</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="104"  data-cell="C20"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Апрув% (Процент подтверждения)</td>
                                        <td><input type="text" class="form-control input-check"  value="65"  data-cell="C21"></td>
                                        <td class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td>Цена клиента</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C22" data-formula="C20*100/C21" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Рекламный бюджет отправок</strong></td>
                                        <td><input type="text" class="form-control input-check"  data-cell="C23" data-formula="C3*C22" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <div class="first-row-holder-2 desk-total">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td width="50%"><strong>Чистая прибыль в месяц (25 дней)</strong></td>
                                            <td width="40%"><input type="text" class="form-control input-result" data-cell="G16"  data-formula="G6*C2"></td>
                                            <td width="10%" class="text-center"><strong>грн.</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2>Выкуп</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Выкуп с почты%</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="80" data-cell="C26"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Невыкуп с почты</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C27" data-formula="100-C26" disabled></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td>Количество выкупов</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C28" data-formula="C3*C26/100" disabled></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Количество невыкупов</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C29" data-formula="C3-C28" disabled></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Цена выкупа возврата</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C30" value="70"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Стоимость возвратов невыкупов</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C31" data-formula="C30*C29" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Витрати Колцентр</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Тарыф приняты</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="10" data-cell="C34"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">К продаже %</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="10" data-cell="C35"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы приняты</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C36" data-formula="(C3*C34)+C3*(((100-C21)/100))*C34" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы к продаже</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C37" data-formula="(C15*C3/100*C13)/100*C35" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Витрати Колцентр за день</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C38" data-formula="C36+C37" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Прочие расходы</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td>Фулфилмент (расходы с 1 отправки)</td>
                                        <td><input type="text" class="form-control input-check" value="4" data-cell="C41"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы фулфилмент</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C42" data-formula="C41*C3" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Валовые расходы за день</td>
                                        <td><input type="text" class="form-control input-check" value="100" data-cell="C43"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Ставка налогообложения</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="3" data-cell="C44"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы на налогообложение</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C45" data-format="0.0" data-formula="(C9/100*C26)/100*C44" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Всего Прочие расходы</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C46" data-formula="C42+C43+C45" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12"><h2 class="topline">Тотал:</h2> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Прибыль с учетом возврата</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="C32" data-formula="((C9+C17)*C26/100)-C31"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Чистая прибыль</td>
                                        <td width="60%"><input type="text" class="form-control input-result-total" data-cell="G6" data-format="0" data-formula="((C9+C17)*C26/100)-C31-C38-C23-C46"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Средняя прибыль с заказа</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G7" data-format="0"  data-formula="G6/C3"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="60%">Рекламный бюджет</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G9"  data-formula="C23"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="60%">Вложения в товар</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G12"  data-formula="(C3*C6)+((C3*C13/100)*C14)" ></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="60%">Объем инвестиций <div class="invest-sm">(товар +реклама)</div></td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G13"  data-formula="G12+G9"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="first-row-holder-2 mob-total">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td width="50%"><strong>Чистая прибыль в месяц (25 дней)</strong></td>
                                            <td width="40%"><input type="text" class="form-control input-result" data-cell="G99"  data-formula="C33*25"></td>
                                            <td width="10%" class="text-center"><strong>грн.</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="block-1" id="home">
    <div class="container">
        <form id="sheet">
            <div class="row">
                <div class="col-sm-12">
                    <div class="calc-holder">
                        <div class="header-holder"><h1>Расчет оффера</h1></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="first-row-holder">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                        <tbody>
                                        <tr>
                                            <td width="70%"><strong>Количество рабочих дней</strong></td>
                                            <td width="20%"><input name="work-days" id="work-days" type="text" class="form-control input-check" value="1" data-cell="C2"></td>
                                            <td width="10%" class="text-center"></td>
                                        </tr>
                                        <tr>
                                            <td width="70%"><strong>Количество отправок в день</strong></td>
                                            <td width="20%"><input name="send-qnt" id="send-qnt" type="text" class="form-control input-check" value="100" data-cell="C3"></td>
                                            <td width="10%" class="text-center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2>Товар</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Цена закупки</td>
                                        <td width="20%"><input id="product-price" type="text" class="form-control input-check" value="350" data-cell="C6"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Цена продажи</td>
                                        <td><input type="text" id="product-sale" class="form-control input-check" value="680" data-cell="C7"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Прибыль с 1 единицы товара</td>
                                        <td><input id="product-profit" class="form-control input-check" data-cell="C8" data-formula="C7-C6" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Прибыль продаж с колич. оптравок</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C9" data-formula="C8*C3" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Прибыль продаж с выкупа</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C10" data-formula="C9/100*C27" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Апсел (Допродажи)</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Апсел%</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="70"  data-cell="C13"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td>Цена закупки апсела</td>
                                        <td><input type="text" class="form-control input-check"  value="120"  data-cell="C14"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Цена продажи апсела</td>
                                        <td><input type="text" class="form-control input-check"  value="300"  data-cell="C15"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Прибыль апсела</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C16" data-formula="C15-C14" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Прибыль апсела с колич. отправок</strong></td>
                                        <td><input type="text" class="form-control input-check"  data-cell="C17" data-formula="C16*C3/100*C13" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Прибыль апсейла с выкупа</strong></td>
                                        <td><input type="text" class="form-control input-check"  data-cell="C18" data-formula="(C3*C16)/100*C13/100*C27" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Лид</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Стоимость лида</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="170"  data-cell="C21"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Апрув% (Процент подтверждения)</td>
                                        <td><input type="text" class="form-control input-check"  value="80"  data-cell="C22"></td>
                                        <td class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td>Цена клиента</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C23" data-formula="C21*100/C22" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Рекламный бюджет колич. отправок</strong></td>
                                        <td><input type="text" class="form-control input-check"  data-cell="C24" data-formula="C3*C23" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <div class="first-row-holder-2 desk-total">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td width="50%"><strong>Чистая прибыль за период рабочих дней</strong></td>
                                            <td width="40%"><input type="text" class="form-control input-result" data-cell="G16" data-format="0.0" data-formula="G6*C2"></td>
                                            <td width="10%" class="text-center"><strong>грн.</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h2>Выкуп</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Выкуп с почты%</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="78" data-cell="C27"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Невыкуп с почты</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C28" data-formula="100-C27" disabled></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td>Количество выкупов</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C29" data-formula="C3*C27/100" disabled></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Количество невыкупов</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C30" data-formula="C3-C29" disabled></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td>Цена выкупа возврата</td>
                                        <td><input type="text" class="form-control input-check" data-cell="C31" value="110"></td>
                                        <td class="text-center">грн.</td>
                                    </tr>

                                    <tr>
                                        <td><strong>Стоимость возвратов невыкупов</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C32" data-formula="C31*C30" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Витрати Колцентр</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Тарыф приняты</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="17" data-cell="C35"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">К продаже %</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="17" data-cell="C36"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы приняты</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C37" data-formula="C35*C3" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы к продаже</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C38" data-format="0.0" data-formula="(C3*C15)/100*C27/100*C13/100*C36" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Витрати Колцентр за день</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C39" data-formula="C37+C38" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <h2>Прочие расходы</h2>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td>Фулфилмент (Расходы с 1 отправки)</td>
                                        <td><input type="text" class="form-control input-check" value="0" data-cell="C42"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы фулфилмент</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C43" data-formula="C42*C3" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td>Другие Расходы</td>
                                        <td><input type="text" class="form-control input-check" value="0" data-cell="C44"></td>
                                        <td class="text-center"></td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Ставка налогообложения</td>
                                        <td width="20%"><input type="text" class="form-control input-check" value="0" data-cell="C45"></td>
                                        <td width="10%" class="text-center">%</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">Расходы на налогообложение</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="C46" data-format="0." data-formula="((C3*C7)+(C3*C15)/100*C13)/100*C27/100*C45" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Всего Прочие расходы</strong></td>
                                        <td><input type="text" class="form-control input-check" data-cell="C47" data-formula="C43+C44+C46" disabled></td>
                                        <td class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12"><h2 class="topline">Тотал:</h2> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Чистая прибыль</td>
                                        <td width="60%"><input type="text" class="form-control input-result-total" data-cell="G6" data-format="0" data-formula="((C9+C18)*C27/100)-C32-C39-C24-C47"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Средняя прибыль с заказа</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G7" data-format="0"  data-formula="G6/C3"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="70%">Отправок</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G8" data-formula="C3"></td>
                                        <td width="10%" class="text-center"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="60%">Рекламный бюджет</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G9"  data-formula="C24"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="60%">Вложения в товар</td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G12"  data-formula="(C3*C6)+((C3*C13/100)*C14)"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tbl-result">
                                    <tbody>
                                    <tr>
                                        <td width="60%">Объем инвестиций <div class="invest-sm">(товар +реклама)</div></td>
                                        <td width="30%"><input type="text" class="form-control input-result-total" data-cell="G13"  data-formula="G12+G9"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="first-row-holder-2 mob-total">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                        <tr>
                                            <td width="50%"><strong>Чистая прибыль в месяц (25 дней)</strong></td>
                                            <td width="40%"><input type="text" class="form-control input-result" data-cell="G99"  data-formula="C33*25"></td>
                                            <td width="10%" class="text-center"><strong>грн.</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12"><h2 class="topline">Окупаемость инвестиций в оборот 7 дней</h2> </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tblhold">
                                    <tbody>
                                    <tr>
                                        <td width="70%">1. Расходы Товар, 1 день</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G20" data-formula="(C6*C3+(C3*C14/100*C13))" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">2. Расходы Реклама, 1 день</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G21" data-formula="C24" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">3. Расходы Возвраты, 1 день</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G22" data-formula="C32" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">4. Расходы Колцентр, 1 день</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G23" data-formula="C39" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">5. Другие Расходы, 1 день</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G24" data-formula="C47" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">6. Инвестиции в 1 оборот, 1 день, грн.</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G25" data-formula="G20+G21+G22+G23+G24" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">7. Инвестиции в 1 оборот, 7 днів, грн.</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G26" data-format="0." data-formula="(G20+G21+G22+G23+G24)*7" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">8. Инвестиции в 1 оборот, 7 днів, $</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G27" data-format="0.0" data-formula="G26/G28" disabled></td>
                                        <td width="10%" class="text-center">$</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">9. Курс доллара, грн.</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G28" value="28"></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">10. Чистая прибыль в месяц (25 роб. дней) ,грн</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G29" data-format="0." data-formula="G6*25" disabled></td>
                                        <td width="10%" class="text-center">грн.</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">11. Чистая прибыль в месяц (25 роб. дней) ,$</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G30" data-format="0.00" data-formula="G29/G28" disabled></td>
                                        <td width="10%" class="text-center">$</td>
                                    </tr>
                                    <tr>
                                        <td width="70%">12. Окупаемость вложений в оборот, роб. дней</td>
                                        <td width="20%"><input type="text" class="form-control input-check" data-cell="G31" data-format="0." data-formula="G26/G6" disabled></td>
                                        <td width="10%" class="text-center">дней</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<style>

div.calc-holder {
	background-color: white;
	padding: 0px 50px 30px 50px;
	border-radius: 5px;
   -webkit-box-shadow: #b0b0b0 0px 0px 5px;
   -moz-box-shadow: #b0b0b0 0px 0px 5px;
   box-shadow: #b0b0b0 0px 0px 5px;	
   margin-bottom: 40px;
}

div.first-row-holder {
	padding: 40px 0 40px 0;
}

div.first-row-holder-2 {
   margin: 20px 0 20px 0;
	padding: 15px 5px 15px 20px;
	background-color: #fff5af;
	border-radius: 5px;
}


div.header-holder {
   padding: 25px 0 25px 50px;
   border-bottom: 1px solid #eeeeee;
   margin: 0 -50px 0 -50px;
}

input.input-check {
	background-color: #e1e7ec;
	border: none;
	text-align: center;
	font-weight: 700;
   font-size: 18px;
   height: 40px;
   padding-left: 3px;
   padding-right: 3px;
}

table.tblhold {
  margin: 0 0 30px 0;	
}


table.tblhold td {  
  padding: 5px 0 5px 0;
}


input.input-result {
	background-color: #fff5af;
	border: none;
	text-align: center;
	font-weight: 700;
   height: 40px;
  -webkit-box-shadow: #b0b0b0 0px 0px 0px;
   -moz-box-shadow: #b0b0b0 0px 0px 0px;
   box-shadow: #b0b0b0 0px 0px 0px;	
   text-align: right;
   font-size: 30px;
}

.topline {
	border-top: 2px solid #b6bfc6;
}


table.tbl-result {
  margin: 0 0 10px 0;	
  background-color: #fff5af;  
  border-radius: 5px;
}


table.tbl-result td {  

  padding: 5px 5px 5px 10px;
}

input.input-result-total {
	background-color: #fff5af;
	border: none;
	text-align: center;
	font-weight: 700;
   font-size: 25px;
   height: 40px;
  -webkit-box-shadow: #b0b0b0 0px 0px 0px;
   -moz-box-shadow: #b0b0b0 0px 0px 0px;
   box-shadow: #b0b0b0 0px 0px 0px;	
   text-align: right;
 padding: 0 0 0 0;   
}

.invest-sm {
 display: inline;
 	font-size: 14px;
}

div.mob-total {
	display: none;
}


@media (max-width: 1200px) {

.invest-sm {
	font-size: 13px;
	display: block;

}

table.tblhold td {  
  font-size: 16px;
}
}


@media (max-width: 992px) {

table.tblhold td {  
  font-size: 14px;
}

div.first-row-holder {
  font-size: 14px;
  padding: 35px 0 35px 0;
}

div.first-row-holder-2 {
  font-size: 14px;
}


input.input-result {
 font-size: 24px;
}

h2 {
  font-size: 24px;
}

table.tbl-result td { 
  font-size: 14px;
}


input.input-check {
   font-size: 15px;
}

input.input-result-total {
 font-size: 15px;

}

}


@media (max-width: 767px) {

div.header-holder {
   margin: 0 -30px 0 -30px;
   padding-left: 25px;
}

h1 {
  margin: 0px 0 0 0;
  font-size: 24px;
}  


div.calc-holder {
	padding: 0px 30px 30px 30px;
}


div.first-row-holder-2 {
   margin: 20px 0 20px 0;
	padding: 10px 5px 10px 5px;
	background-color: #fff5af;
	border-radius: 5px;
}



div.mob-total {
	display: block;
}

div.desk-total {
	display: none;
}

input.input-result {
 font-size: 20px;
}



}

</style>