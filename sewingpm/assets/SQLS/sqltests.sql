SELECT
    Patterns.number AS "Pattern Number",
    Patterns.description AS "Pattern Description",
    Brand.brand AS "Brand",
    Style.style AS "Style",
    Size.size AS "Size"

FROM patterns AS Patterns
	, brand AS Brand
	, style AS Style
	, size AS Size
WHERE  
patterns.bid = brand.bid
    AND patterns.stid = style.stid
    AND patterns.sid = size.sid
    ;

SELECT
    brand.brand AS "Brands",
    color.color AS "Colors",
    fabric_type.weave AS "Weaves",
    fabric_type.fiber AS "Fibers",
    images.name AS "Image Name",
    images.file_dir AS "File Directory",
    notion_type.type AS "Notion Types",
    size AS "Sizes",
    STATUS AS "Status",
    style AS "Style",
    tools.tool AS "Tools",
    trim_type.type AS "Trim Types"
FROM
    brand,
    color,
    fabric_type,
    images,
    notion_type,
    size,
    STATUS,
    style,
    tools,
    trim_type


    =======================
SELECT
    `sewingprojectmanager`.`images`.file_dir` AS `file_dir`,
    `sewingprojectmanager`.`images`.name` AS `Image Name`,
    `sewingprojectmanager`.`patterns`.`num` AS `Pattern Number`,
    `sewingprojectmanager`.`patterns`.`descri` AS `Pattern Description`,
    `sewingprojectmanager`.`brand`.`brand` AS `Brand`,
    `sewingprojectmanager`.`style`.`style` AS `Style`,
    `sewingprojectmanager`.`size`.`size` AS `Size`
FROM
    (((((  `sewingprojectmanager`.`patterns`
    JOIN `sewingprojectmanager`.`images`.`file_dir`)
    JOIN `sewingprojectmanager`.images`.``name`)
    JOIN `sewingprojectmanager`.`brand`)
    JOIN `sewingprojectmanager`.`style`)
    JOIN `sewingprojectmanager`.`size`)
WHERE
    (
        (`sewingprojectmanager`.`patterns`.`IMID` = `sewingprojectmanager`.`images`.`imid`)
        AND
        (`sewingprojectmanager`.`patterns`.`BID` = `sewingprojectmanager`.`brand`.`BID`) 
        AND
        (`sewingprojectmanager`.`patterns`.`STID` = `sewingprojectmanager`.`style`.`STID`) 
        AND
        (`sewingprojectmanager`.`patterns`.`SID` = `sewingprojectmanager`.`size`.`SID`)
    )