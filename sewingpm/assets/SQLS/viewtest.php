SELECT
    sewingprojectmanager.images.file_dir AS "File Directory",
    sewingprojectmanager.images.name AS "Image Nam",
    sewingprojectmanager.patterns.num AS "Pattern Number",
    sewingprojectmanager.patterns.descri AS "Pattern Description",
    sewingprojectmanager.brand.brand AS "Brand",
    sewingprojectmanager.style.style AS "Style",
    sewingprojectmanager.size.size AS "Size"
FROM
    (((((
        sewingprojectmanager.patterns JOIN sewingprojectmanager.images.file_dir
                    )
                JOIN sewingprojectmanager.images.name
                )
            JOIN sewingprojectmanager.brand
            )
        JOIN sewingprojectmanager.style
        )
    JOIN sewingprojectmanager.size
    )
WHERE
    (
        (
            sewingprojectmanager.patterns.IMID = sewingprojectmanager.images.imid
        ) AND(
            sewingprojectmanager.patterns.BID = sewingprojectmanager.brand.BID
        ) AND(
            sewingprojectmanager.patterns.STID = sewingprojectmanager.style.STID
        ) AND(
            sewingprojectmanager.patterns.SID = sewingprojectmanager.size.SID
        )
    )