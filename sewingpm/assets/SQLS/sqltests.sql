SELECT
    Patterns.num AS "Pattern Number",
    Patterns.descri AS "Pattern Description",
    Brand.brand AS "Brand",
    Style.style AS "Style",
    Size.size AS "Size",
    Images.name AS "Images"
FROM patterns AS Patterns
	, brand AS Brand
	, style AS Style
	, size AS Size
    , images AS Images
WHERE  
patterns.bid = brand.bid
    AND patterns.stid = style.stid
    AND patterns.sid = size.sid
    AND patterns.IMID = images.imid
;