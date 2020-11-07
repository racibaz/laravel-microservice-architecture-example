# Product Management

APIs for managing products

## Get all products




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8089/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8089/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 1,
        "title": "Woodrow Padberg",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/006644?text=sapiente",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 2,
        "title": "Rosario Dibbert",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/002255?text=laborum",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 3,
        "title": "Broderick Herzog",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/0088bb?text=aliquam",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 4,
        "title": "Ms. Alexanne Botsford V",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/009966?text=incidunt",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 5,
        "title": "Jacynthe Tremblay",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/0044bb?text=enim",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 6,
        "title": "Glen Olson",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/00ee66?text=nihil",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 7,
        "title": "Dr. River Barton",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/005577?text=qui",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 8,
        "title": "Ms. Lia McGlynn",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/005566?text=in",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 9,
        "title": "Ms. Donna Klein",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/001188?text=aliquam",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 10,
        "title": "Cara Moore",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/00cc44?text=et",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 11,
        "title": "Dr. Alexandra Kub DDS",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/006611?text=mollitia",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 12,
        "title": "Mr. Chet Pouros Jr.",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/00bbee?text=id",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 13,
        "title": "Mauricio Senger",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/0022dd?text=repellendus",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 14,
        "title": "Gust Volkman IV",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/00ffaa?text=perferendis",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 15,
        "title": "Mr. Toy Leffler",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/00dd44?text=exercitationem",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 16,
        "title": "Prof. Elwyn Prohaska",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/007700?text=commodi",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 17,
        "title": "Mrs. Eunice Bogan",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/007733?text=reiciendis",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 18,
        "title": "D'angelo Walker",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/0077bb?text=voluptatem",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 19,
        "title": "Ms. Leonora Wiegand",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/0022cc?text=ipsa",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 20,
        "title": "Renee Tremblay",
        "image": "https:\/\/via.placeholder.com\/640x480.png\/002288?text=voluptatem",
        "likes": 0,
        "created_at": "2020-11-07T11:04:18.000000Z",
        "updated_at": "2020-11-07T11:04:18.000000Z"
    },
    {
        "id": 21,
        "title": "deneme 2255678",
        "image": "deneme 2255678",
        "likes": 0,
        "created_at": "2020-11-07T11:17:08.000000Z",
        "updated_at": "2020-11-07T11:17:08.000000Z"
    }
]
```
<div id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"></code></pre>
</div>
<div id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products"></code></pre>
</div>
<form id="form-GETapi-products" data-method="GET" data-path="api/products" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products" onclick="tryItOut('GETapi-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products" onclick="cancelTryOut('GETapi-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products</code></b>
</p>
</form>


## Create a product.




> Example request:

```bash
curl -X POST \
    "http://localhost:8089/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8089/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-products"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"></code></pre>
</div>
<div id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products"></code></pre>
</div>
<form id="form-POSTapi-products" data-method="POST" data-path="api/products" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-products" onclick="tryItOut('POSTapi-products');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-products" onclick="cancelTryOut('POSTapi-products');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-products" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/products</code></b>
</p>
</form>


## Show a product.




> Example request:

```bash
curl -X GET \
    -G "http://localhost:8089/api/products/maxime" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8089/api/products/maxime"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-products--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-products--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--product-"></code></pre>
</div>
<div id="execution-error-GETapi-products--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--product-"></code></pre>
</div>
<form id="form-GETapi-products--product-" data-method="GET" data-path="api/products/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-products--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-products--product-" onclick="tryItOut('GETapi-products--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-products--product-" onclick="cancelTryOut('GETapi-products--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-products--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/products/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="GETapi-products--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Update a product.




> Example request:

```bash
curl -X PUT \
    "http://localhost:8089/api/products/fuga" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8089/api/products/fuga"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-products--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-products--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--product-"></code></pre>
</div>
<div id="execution-error-PUTapi-products--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--product-"></code></pre>
</div>
<form id="form-PUTapi-products--product-" data-method="PUT" data-path="api/products/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-products--product-" onclick="tryItOut('PUTapi-products--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-products--product-" onclick="cancelTryOut('PUTapi-products--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-products--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/products/{product}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/products/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="PUTapi-products--product-" data-component="url" required  hidden>
<br>
</p>
</form>


## Delete a product.




> Example request:

```bash
curl -X DELETE \
    "http://localhost:8089/api/products/sint" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost:8089/api/products/sint"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-products--product-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-products--product-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product-"></code></pre>
</div>
<div id="execution-error-DELETEapi-products--product-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product-"></code></pre>
</div>
<form id="form-DELETEapi-products--product-" data-method="DELETE" data-path="api/products/{product}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-products--product-" onclick="tryItOut('DELETEapi-products--product-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-products--product-" onclick="cancelTryOut('DELETEapi-products--product-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-products--product-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/products/{product}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>product</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="product" data-endpoint="DELETEapi-products--product-" data-component="url" required  hidden>
<br>
</p>
</form>



