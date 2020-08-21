SELECT Patterns.number AS "Pattern Number",
    Patterns.description AS "Pattern Description",
    Brand.brand AS "Pattern Company"
FROM patterns AS Patterns,
    brand AS Brand
WHERE patterns.bid = brand.bid

;