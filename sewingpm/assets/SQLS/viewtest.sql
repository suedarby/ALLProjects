SELECT
    images.file_dir AS "File Directory",
    images.name AS "Image Nam",
    patterns.num AS "Pattern Number",
    patterns.descri AS "Pattern Description",
    brand.brand AS "Brand",
    style.style AS "Style",
    size.size AS "Size"
FROM
    (((((
        patterns JOIN images.file_dir
                    )
                JOIN images.name
                )
            JOIN brand
            )
        JOIN style
        )
    JOIN size
    )
WHERE
    (
        (
            patterns.IMID = images.imid
        ) AND(
            patterns.BID = brand.BID
        ) AND(
            patterns.STID = style.STID
        ) AND(
            patterns.SID = size.SID
        )
    )