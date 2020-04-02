<script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "{{$page->data('settings','site.title')}}",
  "url": "{{$page->baseUrl}}",
  "logo": "{{$page->data('settings','site.image')}}",
  "image": "{{$page->data('settings','favicon')}}",
  "description": "{{$page->data('settings','site.description')}}",
  "address": {
     "@type": "PostalAddress",
     "streetAddress": "{{$page->data('offices')->offices[0]->address}}",
     "addressLocality": "New York",
     "postalCode": "10016",
     "addressCountry": "USA"
  },
  "telephone": {{$page->data('offices')->offices[0]->telephone}},
  "hasMap": "https://goo.gl/maps/uhk2tpLvqoSHufLx5",
  "openingHours": "Mo 08:00-06:00 Tu 08:00-18:00 We 08:00-18:00 Th 08:00-18:00 Fr 08:00-18:00"
}
</script>