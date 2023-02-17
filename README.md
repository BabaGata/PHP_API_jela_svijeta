# jela_svijeta

## Primjer rute
http://127.0.0.1:8000/api/hr/dishes/archive?per_page=2&page=1&diff_time=20:00:00&with=tags,category,ingredients

```json
{
    "data": [
        {
            "id": 10,
            "title": "novi 10",
            "description": "novi opis 10",
            "status": "DELETED",
            "category": {
                "id": 4,
                "title": "Kategorija 4",
                "slug": "category-4"
            },
            "tags": [
                {
                    "id": 15,
                    "title": "Tag HRV 15",
                    "slug": "tag-15"
                },
                {
                    "id": 9,
                    "title": "Tag HRV 9",
                    "slug": "tag-9"
                }
            ],
            "ingredients": [
                {
                    "id": 8,
                    "title": "Sastojak 8",
                    "slug": "ingredient-8",
                    "amount": 25.9,
                    "typeAmount": "dcl"
                },
                {
                    "id": 7,
                    "title": "Sastojak 7",
                    "slug": "ingredient-7",
                    "amount": null,
                    "typeAmount": null
                },
                {
                    "id": 6,
                    "title": "Sastojak 6",
                    "slug": "ingredient-6",
                    "amount": null,
                    "typeAmount": null
                }
            ]
        },
        {
            "id": 11,
            "title": "novi 11",
            "description": "novi opis 11",
            "status": "MODIFIED",
            "category": {
                "id": 4,
                "title": "Kategorija 4",
                "slug": "category-4"
            },
            "tags": [
                {
                    "id": 19,
                    "title": "Tag HRV 19",
                    "slug": "tag-19"
                }
            ],
            "ingredients": [
                {
                    "id": 19,
                    "title": "Sastojak 19",
                    "slug": "ingredient-19",
                    "amount": 39.5,
                    "typeAmount": "g"
                },
                {
                    "id": 4,
                    "title": "Sastojak 4",
                    "slug": "ingredient-4",
                    "amount": null,
                    "typeAmount": null
                },
                {
                    "id": 12,
                    "title": "Sastojak 12",
                    "slug": "ingredient-12",
                    "amount": null,
                    "typeAmount": null
                },
                {
                    "id": 7,
                    "title": "Sastojak 7",
                    "slug": "ingredient-7",
                    "amount": null,
                    "typeAmount": null
                }
            ]
        }
    ],
    "links": {
        "first": "http://127.0.0.1:8000/api/hr/dishes/archive?page=1",
        "last": "http://127.0.0.1:8000/api/hr/dishes/archive?page=3",
        "prev": null,
        "next": "http://127.0.0.1:8000/api/hr/dishes/archive?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/hr/dishes/archive?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": "http://127.0.0.1:8000/api/hr/dishes/archive?page=2",
                "label": "2",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/hr/dishes/archive?page=3",
                "label": "3",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/hr/dishes/archive?page=2",
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "path": "http://127.0.0.1:8000/api/hr/dishes/archive",
        "per_page": 2,
        "to": 2,
        "total": 5
    }
}
```

## Popis ruta i funkcionalnosti
   Get
1. /api/dishes  ->  index -> vraca samo jela koja nisu pobrisana
2. /api/dishes/search/{title} ->  search ->  pretrazivanje po title, samo nad ne izbrisanim jelima
3. /api/dishes/archive  -> archive  -> sve vraca dakle i izbrisane podatke, jedino ovaj route ima diff_time za sad !!!
4. /api/dishes/{id}  ->  show  -> vraca jela po id

    Post
5. /api/dishes  ->  store  ->  sprema podatke o jelu (samo o jelu)
6. /api/dishes/{id}/restore  ->  restore  ->  vraca izbrisane podatke

    Put
7. /api/dishes/{id}  ->  update  ->  updatea podatke o jelu (samo o jelu)

    Delete
8. /api/dishes/{id}  ->  delete  -> softDelete podataka
9. /api/dishes/{id}/force_delete  ->  forceDelete  ->  u potpunosti brise podatke

## Objasnjenje
Rjesenje zadatka je pod rutom 3. /api/dishes/archive, ostale dodatne stvari sam napravila samo za vjezbu usput.

### Voljela bih dobiti komentare o tome sto bi moglo biti bolje napravljeno, hvala!
