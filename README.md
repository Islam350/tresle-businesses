<p align="center"><a href="https://tresle.com" target="_blank"><img src="https://tresle.com/img/tresle_logo_footer.svg" width="400"></a></p>

<p align="center">
Businesses Task
</p>

## About Laravel

A small backend application using Laravel. The application stores and manage businesses.

## Database structure

<img src="https://raw.githubusercontent.com/Islam350/tresle-businesses/master/DBD.png">

## API endpoints

Description of application endpoints, For better representation you can use on of the following methods:
- **[Postman documentations](https://documenter.getpostman.com/view/9092339/TWDdiDYM)**
- **[Postman collection file](https://raw.githubusercontent.com/Islam350/tresle-businesses/master/Tresle%20Businesses.postman_collection.json)**

### Businesses

#### get-businesses
Which returns the latest businesses with pagination:

GET `{{Domain}}/api/businesses`

Parameters`
[
    'page'  =>  1
]
`


#### store-businesses
Which accepts the required fields including a city and creates a new business:

POST `{{Domain}}/api/businesses`

Parameters`
[
'name'      =>  'Name of business',
'price'     =>  10000
'city_id'   =>  1
]
`


#### get-business
Which returns a business:

GET `{{Domain}}/api/businesses/{{PostID}}`

#### update-businesses
Which updates an existing business and/or its city:

PUT `{{Domain}}/api/businesses/{{PostID}}`

Parameters`
[
'name'      =>  'New name of the business',
'price'     =>  20000
'city_id'   =>  2
]
`

#### delete-businesses
Which deletes an existing business:

DELETE `{{Domain}}/api/businesses/{{PostID}}`


### Countries

#### get-countries
Which returns all countries with pagination:

GET `{{Domain}}/api/countries`

Parameters`
[
'page'  =>  1
]
`

### Regions

#### get-regions
Which returns all regions with pagination:

GET `{{Domain}}/api/regions`

Parameters`
[
'page'  =>  1
]
`

### Cities

#### get-cities
Which returns all cities with pagination:

GET `{{Domain}}/api/cities`

Parameters`
[
'page'  =>  1
]
`

### **Key map**
<small>{{Domain}} => Base url of your application</small><br>
<small>{{PostID}} => ID of post </small>

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
