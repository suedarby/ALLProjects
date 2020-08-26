SELECT Patterns.num AS "Pattern Number",
    Brand.brand AS "Pattern Company",
    Patterns.descri AS "Pattern Description"
FROM patterns AS Patterns,
    brand AS Brand
WHERE patterns.bid = brand.bid
    ;