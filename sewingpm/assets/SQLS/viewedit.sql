SELECT
    sewingprojectmanager.patterns.num AS "Pattern Number",
    sewingprojectmanager.patterns.descri AS "Pattern Description",
    sewingprojectmanager.brand.brand AS "Brand",
    sewingprojectmanager.style.style AS "Style",
    sewingprojectmanager.size.size AS "Size",
    sewingprojectmanager.images.name AS "Image Name",
    sewingprojectmanager.images.file_dir AS "File Name"

FROM
    (
    (
    (
    (
    (
    sewingprojectmanager.patterns
    JOIN sewingprojectmanager.brand  )
    JOIN sewingprojectmanager.style  )
    JOIN sewingprojectmanager.size  )
    JOIN sewingprojectmanager.IMAGE    )

WHERE
( 
    (sewingprojectmanager.patterns.BID = sewingprojectmanager.brand.BID
        )
    AND
    (sewingprojectmanager.patterns.STID = sewingprojectmanager.style.STID
        )
    AND
    (sewingprojectmanager.patterns.SID = sewingprojectmanager.size.SID
        )
    AND
    (sewingprojectmanager.patterns.IMID = sewingprojectmanager.images.IMID
        )
)