addEventListener('fetch', (event) => {
event.respondWith(handleRequest(event.request))
})

async function handleRequest(request) {
const resp = await fetch('https://ads-serve.brave.com/v7/catalog')
return resp
}

name = "proxy"
type = "javascript"
account_id = "4cce32116f1ab0813548fbace5cda731"
workers_dev = true

[env.production]
workers_dev = false
route = "https://proxy.bravebat.info/"
zone_id = "826899a6579754cd0a3a8dc16b9fe5d6"
